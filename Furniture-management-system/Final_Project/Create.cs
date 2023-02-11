using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Configuration;
using System.Data.SqlClient;

namespace WindowsFormsApp1
{
    public partial class Create : Form
    {
        string cs = ConfigurationManager.ConnectionStrings["dbcs"].ConnectionString;

        public Create()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {

            if (radioButton1.Checked == true)
            {
                SqlConnection con = new SqlConnection(cs);

                string query = "insert into CUSTOMER values(@user, @mbl, @email, @pass)";

                SqlCommand cmd = new SqlCommand(query, con);
                cmd.Parameters.AddWithValue("@user", textBox1.Text);
                cmd.Parameters.AddWithValue("@mbl", textBox2.Text);
                cmd.Parameters.AddWithValue("@email", textBox3.Text);
                cmd.Parameters.AddWithValue("@pass", textBox4.Text);
                con.Open();

                int a = cmd.ExecuteNonQuery();
                if (a > 0)
                {
                    MessageBox.Show("Account Created");
                    Login newForm = new Login();
                    newForm.Show();
                    this.Hide();
                }
                else
                { MessageBox.Show("Could not Create Account"); }

                
            }

            else if(radioButton2.Checked == true)
                {
                SqlConnection con = new SqlConnection(cs);

                string query = "insert into SELLER values(@user, @mbl, @email, @pass)";

                SqlCommand cmd = new SqlCommand(query, con);
                cmd.Parameters.AddWithValue("@user", textBox1.Text);
                cmd.Parameters.AddWithValue("@mbl", textBox2.Text);
                cmd.Parameters.AddWithValue("@email", textBox3.Text);
                cmd.Parameters.AddWithValue("@pass", textBox4.Text);
                con.Open();

                int a = cmd.ExecuteNonQuery();
                if (a > 0)
                {
                    MessageBox.Show("Account Created");
                    Login newForm = new Login();
                    newForm.Show();
                    this.Hide();
                }
                else
                { MessageBox.Show("Could not Create Account"); }

               
            }

            else if (radioButton3.Checked == true)
            {
                SqlConnection con = new SqlConnection(cs);

                string query = "insert into F_OWNER values(@user, @mbl, @email, @pass)";

                SqlCommand cmd = new SqlCommand(query, con);
                cmd.Parameters.AddWithValue("@user", textBox1.Text);
                cmd.Parameters.AddWithValue("@mbl", textBox2.Text);
                cmd.Parameters.AddWithValue("@email", textBox3.Text);
                cmd.Parameters.AddWithValue("@pass", textBox4.Text);
                con.Open();

                int a = cmd.ExecuteNonQuery();
                if (a > 0)
                {
                    MessageBox.Show("Account Created");
                    Login newForm = new Login();
                    newForm.Show();
                    this.Hide();
                }
                else
                { MessageBox.Show("Could not Create Account"); }

                
            }

            else { MessageBox.Show("Account Creation Failed"); }
        }
      
        private void textBox1_Leave(object sender, EventArgs e)
        {
            if (string.IsNullOrEmpty(textBox1.Text) == true)
            {
                textBox1.Focus();
                errorProvider1.SetError(this.textBox1, "Enter information!");
            }
            else
            {
                errorProvider1.Clear();
            }
        }

        private void textBox2_Leave(object sender, EventArgs e)
        {
            if (string.IsNullOrEmpty(textBox2.Text) == true)
            {
                textBox2.Focus();
                errorProvider2.SetError(this.textBox2, "Enter information!");
            }

            else
            {
                errorProvider2.Clear();
            }
        }

        private void textBox3_Leave(object sender, EventArgs e)
        {
            if (string.IsNullOrEmpty(textBox3.Text) == true)
            {
                textBox3.Focus();
                errorProvider3.SetError(this.textBox3, "Enter information!");
            }
            else
            {
                errorProvider3.Clear();
            }
        }

        private void textBox4_Leave(object sender, EventArgs e)
        {

            if (string.IsNullOrEmpty(textBox4.Text) == true)
            {
                textBox4.Focus();
                errorProvider4.SetError(this.textBox4, "Enter information!");
            }
            else
            {
                errorProvider4.Clear();
            }
        }

        private void textBox5_Leave(object sender, EventArgs e)
        {

            if (string.IsNullOrEmpty(textBox5.Text) == true)
            {
                textBox5.Focus();
                errorProvider5.SetError(this.textBox5, "Enter information!");
            }
            else
            {
                errorProvider5.Clear();
            }
        }

        private void button3_Click(object sender, EventArgs e)
        {
            Login newForm = new Login();
            newForm.Show();
            this.Hide();
        }

        private void button1_MouseHover(object sender, EventArgs e)
        {
            button1.BackColor = Color.DarkCyan;
        }

        private void button1_MouseLeave(object sender, EventArgs e)
        {
            button1.BackColor = Color.LightGreen;
        }

        private void button3_Click_1(object sender, EventArgs e)
        {
            Login H1 = new Login();
            H1.Show();
            this.Hide();
        }

    }
}
