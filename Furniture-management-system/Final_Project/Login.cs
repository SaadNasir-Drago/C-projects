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
    public partial class Login : Form
    {
        string cs = ConfigurationManager.ConnectionStrings["dbcs"].ConnectionString;
        public Login()
        {
            InitializeComponent();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            Create newForm = new Create();
            newForm.Show();
            this.Hide();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            //admin username and pass
            if (textBox1.Text=="admin" && textBox2.Text == "0000")
            {
                Admin newForm = new Admin();
                newForm.Show();
                this.Hide();
            }

            else if (textBox1.Text != "" && textBox2.Text != "" && radioButton1.Checked==true)
            {
                SqlConnection con = new SqlConnection(cs);
                string query = "select * from CUSTOMER where USERNAME=@user and PASS=@pass";
                SqlCommand cmd = new SqlCommand(query, con);
                cmd.Parameters.AddWithValue("@user", textBox1.Text);
                cmd.Parameters.AddWithValue("@pass", textBox2.Text);
                con.Open();

                SqlDataReader dr = cmd.ExecuteReader();
                if (dr.HasRows == true)
                {
                    MessageBox.Show("Login Successful", "Success", MessageBoxButtons.OK, MessageBoxIcon.Information);
                    mng_furniture mng = new mng_furniture();
                    mng.Show();
                    this.Hide();
                }
                else
                {
                    MessageBox.Show("Login Failed", "Failed", MessageBoxButtons.OK, MessageBoxIcon.Information);
                }

                con.Close();
            }

            else if (textBox1.Text != "" && textBox2.Text != "" && radioButton3.Checked == true)
            {
                SqlConnection con = new SqlConnection(cs);
                string query = "select * from SELLER where USERNAME=@user and PASS=@pass";
                SqlCommand cmd = new SqlCommand(query, con);
                cmd.Parameters.AddWithValue("@user", textBox1.Text);
                cmd.Parameters.AddWithValue("@pass", textBox2.Text);
                con.Open();

                SqlDataReader dr = cmd.ExecuteReader();
                if (dr.HasRows == true)
                {
                    MessageBox.Show("Login Successful", "Success", MessageBoxButtons.OK, MessageBoxIcon.Information);
                    Add_Sell newForm = new Add_Sell();
                    newForm.Show();
                    this.Hide();
                }
                else
                {
                    MessageBox.Show("Login Failed", "Failed", MessageBoxButtons.OK, MessageBoxIcon.Information);
                }

                con.Close();
            }

            else if (textBox1.Text != "" && textBox2.Text != "" && radioButton2.Checked == true)
            {
                SqlConnection con = new SqlConnection(cs);
                string query = "select * from F_OWNER where USERNAME=@user and PASS=@pass";
                SqlCommand cmd = new SqlCommand(query, con);
                cmd.Parameters.AddWithValue("@user", textBox1.Text);
                cmd.Parameters.AddWithValue("@pass", textBox2.Text);
                con.Open();

                SqlDataReader dr = cmd.ExecuteReader();
                if (dr.HasRows == true)
                {
                    MessageBox.Show("Login Successful", "Success", MessageBoxButtons.OK, MessageBoxIcon.Information);
                    Add_Rent newForm = new Add_Rent();
                    newForm.Show();
                    this.Hide();
                }
                else
                {
                    MessageBox.Show("Login Failed", "Failed", MessageBoxButtons.OK, MessageBoxIcon.Information);
                }

                con.Close();
            }

            else
            {
                MessageBox.Show("Please fill the form", "Information", MessageBoxButtons.OK, MessageBoxIcon.Information);
            }

        }
        private void checkBox1_CheckedChanged(object sender, EventArgs e)
        {
            bool status = checkBox1.Checked;

            switch (status)
            {
                case true:
                    textBox2.UseSystemPasswordChar = false;
                    break;
                default:
                    textBox2.UseSystemPasswordChar = true;
                    break;
            }
        }

       private void textBox1_Leave(object sender, EventArgs e)
        {
             if (string.IsNullOrEmpty(textBox1.Text) == true)
            {
                textBox1.Focus();
                errorProvider1.SetError(this.textBox1, "Enter your username please!");
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
                 errorProvider1.SetError(this.textBox2, "Enter your username please!");
             }

             else
             {
                 errorProvider2.Clear();
             }
        }

        private void button4_Click(object sender, EventArgs e)
        {
            Update U = new Update();
            U.Show();
            this.Hide();
        }

        private void button6_Click(object sender, EventArgs e)
        {
            viewProduct newform = new viewProduct();
            newform.Show();
            this.Hide();
        }
    }
    }
