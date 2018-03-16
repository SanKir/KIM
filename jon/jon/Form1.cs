using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace jon
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
            textBox4.Visible = false;
            textBox5.Visible = false;
            textBox6.Visible = false;
        }
        List<Detal> listDetal = new List<Detal>();
        Point loc = new Point(206,90);

        public void Check()
        {
            if (checkBox1.Checked)
            {
                label3.Text = "";
                textBox1.Visible = false;
                textBox2.Visible = false;
                textBox4.Visible = true;
                textBox5.Visible = true;
                textBox6.Visible = true;
                label3.Text += "Автоматическое заполнение";
            }
            else if (!checkBox1.Checked)
            {
                label3.Text = "";
                textBox1.Visible = true;
                textBox2.Visible = true;
                textBox4.Visible = false;
                textBox5.Visible = false;
                textBox6.Visible = false;
                label3.Text += "Ручное заполнение";
            }
        }

        private void button1_Click(object sender, EventArgs e)
        {
            if(!checkBox1.Checked)
            {
                listDetal.Add(new Detal(listDetal.Count, Convert.ToInt32(textBox1.Text), Convert.ToInt32(textBox2.Text)));
                dataGridView1.Rows.Add(listDetal.Count, textBox1.Text, textBox2.Text);
                textBox1.Text = "";
                textBox2.Text = "";
            }
            else
            {
                Random rnd = new Random();
                for(int i = 0; i < Convert.ToInt32(textBox6.Text); i++)
                {
                    int temp1 = rnd.Next(Convert.ToInt32(textBox4.Text), Convert.ToInt32(textBox5.Text) + 1);
                    int temp2 = rnd.Next(Convert.ToInt32(textBox4.Text), Convert.ToInt32(textBox5.Text) + 1);
                    listDetal.Add(new Detal(listDetal.Count, temp1, temp2));
                    dataGridView1.Rows.Add(listDetal.Count, temp1, temp2);
                    temp1 = 0;
                    temp2 = 0;
                }
            }
        }

        private void button2_Click(object sender, EventArgs e)
        {
            textBox3.Text = "";
            List<Detal> group1 = new List<Detal>();
            List<Detal> group2 = new List<Detal>();
            System.Diagnostics.Stopwatch st = new System.Diagnostics.Stopwatch();
            st.Start();
            for (int i = 0; i < listDetal.Count; i++)
            {
                if (listDetal[i].GetStanok1() <= listDetal[i].GetStanok2())
                {
                    group1.Add(new Detal(listDetal[i].GetNumber() + 1, listDetal[i].GetStanok1(), listDetal[i].GetStanok2()));
                }
            }
            NameComparer2 nc2 = new NameComparer2();
            group1.Sort(nc2);
            for (int i = 0; i < listDetal.Count; i++)
            {
                if (listDetal[i].GetStanok1() > listDetal[i].GetStanok2())
                {
                    group2.Add(new Detal(listDetal[i].GetNumber() + 1, listDetal[i].GetStanok1(), listDetal[i].GetStanok2()));
                }
            }
            NameComparer nc = new NameComparer();
            group2.Sort(nc);
            listDetal.Clear();
            listDetal.AddRange(group1);
            listDetal.AddRange(group2);
            int[] arrsum1 = new int[listDetal.Count];
            int[] arrsum2 = new int[listDetal.Count];
            int sum1 = 0, sum2 = 0;
            
            for (int i = 0; i < listDetal.Count; i++)
            {
                sum1 += listDetal[i].GetStanok1();
                arrsum1[i] = sum1;
                sum2 = sum1 + listDetal[i].GetStanok2();
                arrsum2[i] = sum2;
                sum2 = 0;
            }
            for (int i = 0; i < listDetal.Count - 1; i++)
            {
                if(arrsum2[i] > arrsum1[i + 1])
                {
                    arrsum1[i + 1] = arrsum2[i];
                }
                sum2 = arrsum1[i + 1] + listDetal[i + 1].GetStanok2();
                arrsum2[i + 1] = sum2;
            }
            for (int i = 0; i < listDetal.Count; i++)
            {
                sum2 = arrsum1[i] + listDetal[i].GetStanok2();
                dataGridView2.Rows.Add(listDetal[i].GetNumber(), listDetal[i].GetStanok1(), listDetal[i].GetStanok2(), arrsum1[i], sum2);
                sum2 = 0;
            }
            st.Stop();
            textBox3.Text += "Анализ успешно выполнен!" + Environment.NewLine + "Время на выполнение: " + st.Elapsed + Environment.NewLine + "Суммарное время на выполнение двух станков составило " +
                arrsum2[arrsum2.Length - 1];
            label2.Text += arrsum2[arrsum2.Length - 1];
        }

        private void pictureBox2_Click(object sender, EventArgs e)
        {
            Close();
        }

        private void button5_Click(object sender, EventArgs e)
        {
            panel4.Height = button5.Height;
            panel4.Top = button5.Top;
            panel1.Visible = true;
            panel1.Location = loc;
            panel6.Visible = false;
        }

        private void button4_Click(object sender, EventArgs e)
        {
            panel4.Height = button4.Height;
            panel4.Top = button4.Top;
            panel6.Visible = true;
            panel6.Location = loc;
            panel1.Visible = false;
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            textBox1.Text = "Время первого станка";
            textBox1.ForeColor = Color.Gray;
            textBox2.Text = "Время второго станка";
            textBox2.ForeColor = Color.Gray;
            textBox4.Text = "Min";
            textBox4.ForeColor = Color.Gray;
            textBox5.Text = "Max";
            textBox5.ForeColor = Color.Gray;
            textBox6.Text = "Количество деталей";
            textBox6.ForeColor = Color.Gray;
            panel4.Height = button5.Height;
            panel4.Top = button5.Top;
            panel1.Visible = true;
            panel1.Location = loc;
            panel6.Visible = false;
        }

        private void textBox1_Enter(object sender, EventArgs e)
        {
            textBox1.Text = null;
            textBox1.ForeColor = Color.Black;
        }

        private void textBox2_Enter(object sender, EventArgs e)
        {
            textBox2.Text = null;
            textBox2.ForeColor = Color.Black;
        }

        private void textBox4_Enter(object sender, EventArgs e)
        {
            textBox4.Text = null;
            textBox4.ForeColor = Color.Black;
        }
        private void textBox5_Enter(object sender, EventArgs e)
        {
            textBox5.Text = null;
            textBox5.ForeColor = Color.Black;
        }
        private void textBox6_Enter(object sender, EventArgs e)
        {
            textBox6.Text = null;
            textBox6.ForeColor = Color.Black;
        }

        private void checkBox1_CheckedChanged(object sender, EventArgs e)
        {
            Check();
        }

        private void textBox4_TextChanged(object sender, EventArgs e)
        {

        }

        private void pictureBox3_Click(object sender, EventArgs e)
        {
            listDetal.Clear();
            dataGridView1.Rows.Clear();
        }
    }
}
