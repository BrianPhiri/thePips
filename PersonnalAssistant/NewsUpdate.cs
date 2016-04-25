using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Net;
using System.IO;
using System.Text.RegularExpressions;

namespace PersonnalAssistant
{
    class NewsUpdate : Form1
    {
        public void news() {
            List<string> headlines = new List<string>();

            WebClient wc = new WebClient();
            String html = wc.DownloadString("http://www.nation.co.ke/");
            MatchCollection m1 = Regex.Matches(html, @"</h1><p>\s(.+?)\s</p><figure>", RegexOptions.Singleline);

            foreach(Match m in m1)
            {
                
                string headline = m.Groups[1].Value;
                headlines.Add(headline);

                //say(headline);
               Console.WriteLine(headline);
            }
           
        }
    }
}
