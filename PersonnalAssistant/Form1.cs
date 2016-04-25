using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Speech.Recognition;
using System.Speech.Synthesis;

namespace PersonnalAssistant
{
    public partial class Form1 : Form
    {
        SpeechRecognitionEngine sre = new SpeechRecognitionEngine();
        SpeechSynthesizer spk = new SpeechSynthesizer();
        Choices list = new Choices();
        public Form1()
        {
            letsTalk();
            introduction();
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        public void introduction(){
            spk.Speak("Hello, how may I help you?");
        }

        public void letsTalk() {
            //list of key words
            list.Add(new string[] { "hello", "hey" });
            Grammar gr = new Grammar(new GrammarBuilder(list));

            try
            {
                sre.RequestRecognizerUpdate();
                sre.LoadGrammar(gr);
                sre.SpeechRecognized += sre_SpeechRecognized;
                sre.SetInputToDefaultAudioDevice();
                sre.RecognizeAsync(RecognizeMode.Multiple);

            }
            catch { return; }

        }

        private void sre_SpeechRecognized(object sender, SpeechRecognizedEventArgs e)
        {
            string command = e.Result.Text;

            if(command == "hey")
            {
                say("I am working");
            }

        }

        //her reply
        public void say(string res)
        {
            spk.Speak(res);
        }

    }
}
