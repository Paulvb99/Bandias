using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;
using AutomaticLogin;
using System.IO;

namespace AutomaticLogin
{
    /// <summary>
    /// Simple browsing form using WebBrowser Control 
    /// </summary>
    public partial class BrowserForm : Form
    {
        private LoginInfos m_LoginInfos = new LoginInfos();  
        private AutoLoginManager m_LoginManager = null;

        public BrowserForm()
        {
            InitializeComponent();
            this.webBrowser.DocumentTitleChanged += new EventHandler(webBrowser_DocumentTitleChanged);
            webBrowser.ProgressChanged += new WebBrowserProgressChangedEventHandler(webBrowser_ProgressChanged);
            webBrowser.EncryptionLevelChanged += new EventHandler(webBrowser_EncryptionLevelChanged);
            this.Resize += new EventHandler(TabPageForm_Resize);
            webBrowser.DocumentCompleted += new WebBrowserDocumentCompletedEventHandler(webBrowser_DocumentCompleted);
        }

        #region Overriden Methods

        protected override void OnClosing(CancelEventArgs e)
        {
            // save the login info
            SaveLoginInformation();
            base.OnClosing(e);
        }

        #endregion

        #region Event Handlers

        private void TabPageForm_Resize(object sender, EventArgs e)
        {
            this.toolStripNavigation.SuspendLayout();
            this.comboAddress.Size = new Size(this.Width - this.btnHome.Width * 7 - this.loadProgress.Width, 26);
            this.toolStripNavigation.ResumeLayout(true);
        }

        private void webBrowser_EncryptionLevelChanged(object sender, EventArgs e)
        {
            if (webBrowser.EncryptionLevel == WebBrowserEncryptionLevel.Insecure || webBrowser.EncryptionLevel == WebBrowserEncryptionLevel.Unknown)
            {
                securityImage.Image = global::AutomaticLogin.Properties.Resources.unlocked;
            }
            else // secure
            {
                securityImage.Image = global::AutomaticLogin.Properties.Resources.locked;
            }
        }

        private void webBrowser_ProgressChanged(object sender, WebBrowserProgressChangedEventArgs e)
        {
            this.loadProgress.PerformStep();
            if (this.loadProgress.Value > loadProgress.Maximum - 10)
                loadProgress.Value = loadProgress.Minimum;
        }

        private void webBrowser_DocumentTitleChanged(object sender, EventArgs e)
        {
            string key = webBrowser.Url.Authority;            
            Text = webBrowser.DocumentTitle;
        }
        
        void webBrowser_DocumentCompleted(object sender, WebBrowserDocumentCompletedEventArgs e)
        {
            // create new AutoLoginManage
            m_LoginManager = new AutoLoginManager(webBrowser, e.Url.Host, m_LoginInfos);
        }
       
        private void btnBack_Click(object sender, EventArgs e)
        {
            GoBack();
        }

        private void btnForward_Click(object sender, EventArgs e)
        {
            GoForward();
        }
        
        private void btnHome_Click(object sender, EventArgs e)
        {
            GoHome();
        }

        private void btnRefresh_Click(object sender, EventArgs e)
        {
            Refresh();
        }
        
        private void btnStop_Click(object sender, EventArgs e)
        {
            Stop();
        }

        private void comboAddress_KeyDown(object sender, KeyEventArgs e)
        {
            if (e.KeyValue == 13)
            {
                e.Handled = true;
                try
                {
                    // check if it is valid url            
                    if (Uri.IsWellFormedUriString(comboAddress.Text, UriKind.Absolute))
                    {
                        webBrowser.Navigate(comboAddress.Text);
                    }
                    else if (Uri.IsWellFormedUriString(@"http://" + comboAddress.Text, UriKind.Absolute))
                    {
                        webBrowser.Navigate(@"http://" + comboAddress.Text);
                    }
                }
                catch { }
            }
        }


        private void buttonRecord_Click(object sender, EventArgs e)
        {
            m_LoginManager.RegisterInfoCollection();
        }

        private void BrowserForm_Load(object sender, EventArgs e)
        {
            // load login information if exist
            LoadLoginInformation();
        }
    

        #endregion
                
        #region Navigation

        private void Navigate(string url)
        {
            webBrowser.Navigate(url);
        }

        private void GoForward()
        {
            webBrowser.GoForward();
        }

        private void GoBack()
        {
            webBrowser.GoBack();
        }

        private void GoHome()
        {
            webBrowser.Navigate("http://www.e-ranger.net");
        }

        private void Stop()
        {
            webBrowser.Stop();
        }

        private void Refresh()
        {
            webBrowser.Refresh();
        }

        #endregion 

        #region Load And Save LoginInfo

        /// <summary>
        /// load the login information from file that is next to the application
        /// </summary>
        private void LoadLoginInformation()
        {
            string path = Path.GetDirectoryName(Application.ExecutablePath) + @"\info.txt";
            if (!File.Exists(path)) return;

            string loginInfo = File.ReadAllText(path);
            //TODO decrypt information
            m_LoginInfos = new LoginInfos(loginInfo);
        }

        /// <summary>
        /// save the login information to file that is next to the application
        /// </summary>
        private void SaveLoginInformation()
        {
            string loginInfo = m_LoginInfos.ToXml();
            //TODO encript the information
            string path = Path.GetDirectoryName(Application.ExecutablePath) + @"\info.txt";
            File.WriteAllText(path, loginInfo);
        }

        #endregion
        
    }
}