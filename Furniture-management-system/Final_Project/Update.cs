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
    public partial class Update : Form
    {
        string cs = ConfigurationManager.ConnectionStrings["dbcs"].ConnectionString;
        public Update()
        {
            InitializeComponent();
        }

        private void button2_Click_1(object sender, EventArgs e)
        {
            if (textBox1.Text != "" && textBox2.Text != "" && radioButton1.Checked == true)
            {
                bool temp = false;
                SqlConnection con = new SqlConnection(cs);
                con.Open();
                SqlCommand cmd = new SqlCommand("select * from CUSTOMER where USERNAME='" + textBox1.Text.Trim() + "' and PASS='" + textBox2.Text.Trim() + "'", con);
                SqlDataReader dr = cmd.ExecuteReader();
                while (dr.Read())
                {
                    textBox3.Text = dr.GetString(0);
                    textBox4.Text = dr.GetString(1);
                    textBox5.Text = dr.GetString(2);
                    textBox6.Text = dr.GetString(3);
                    temp = true;
                }
                if (temp == false)
                    MessageBox.Show("not found");
                con.Close();
            }

            else if (textBox1.Text != "" && textBox2.Text != "" && radioButton3.Checked == true)
            {
                bool temp = false;
                SqlConnection con = new SqlConnection(cs);
                con.Open();
                SqlCommand cmd = new SqlCommand("select * from F_OWNER where USERNAME='" + textBox1.Text.Trim() + "' and PASS='" + textBox2.Text.Trim() + "'", con);
                SqlDataReader dr = cmd.ExecuteReader();
                while (dr.Read())
                {
                    textBox3.Text = dr.GetString(0);
                    textBox4.Text = dr.GetString(1);
                    textBox5.Text = dr.GetString(2);
                    textBox6.Text = dr.GetString(3);
                    temp = true;
                }
                if (temp == false)
                    MessageBox.Show("not found");
                con.Close();
            }

            else if (textBox1.Text != "" && textBox2.Text != "" && radioButton2.Checked == true)
            {
                bool temp = false;
                SqlConnection con = new SqlConnection(cs);
                con.Open();
                SqlCommand cmd = new SqlCommand("select * from SELLER where USERNAME='" + textBox1.Text.Trim() + "' and PASS='" + textBox2.Text.Trim() + "'", con);
                SqlDataReader dr = cmd.ExecuteReader();
                while (dr.Read())
                {
                    textBox3.Text = dr.GetString(0);
                    textBox4.Text = dr.GetString(1);
                    textBox5.Text = dr.GetString(2);
                    textBox6.Text = dr.GetString(3);
                    temp = true;
                }
                if (temp == false)
                    MessageBox.Show("not found");
                con.Close();
            }

            else
            {
                MessageBox.Show("Please fill the form", "Information", MessageBoxButtons.OK, MessageBoxIcon.Information);
            }

            Owner_Account.Visible = true;
        }

        private void button1_Click(object sender, EventArgs e)

        {
            if (textBox1.Text != "" && textBox2.Text != "" && radioButton1.Checked == true)
            {

                SqlConnection con = new SqlConnection(cs);
                string query = "update CUSTOMER set USERNAME=@user,MOBILE=@mbl , EMAIL=@email, PASS=@pass where USERNAME=@user";
                SqlCommand cmd = new SqlCommand(query, con);
                cmd.Parameters.AddWithValue("@user", textBox3.Text);
                cmd.Parameters.AddWithValue("@mbl", textBox4.Text);
                cmd.Parameters.AddWithValue("@email", textBox5.Text);
                cmd.Parameters.AddWithValue("@pass", textBox6.Text);

                con.Open();
                int a = cmd.ExecuteNonQuery();//0 1
                if (a > 0)
                {
                    MessageBox.Show("Data Updated Successfully ! ");

                    ResetContro();
                }
                else
                {
                    MessageBox.Show("Data not Updated ! ");
                }
            }

            else if (textBox1.Text != "" && textBox2.Text != "" && radioButton3.Checked == true)
            {

                SqlConnection con = new SqlConnection(cs);
                string query = "update F_OWNER set USERNAME=@user,MOBILE=@mbl , EMAIL=@email, PASS=@pass where USERNAME=@user";
                SqlCommand cmd = new SqlCommand(query, con);
                cmd.Parameters.AddWithValue("@user", textBox3.Text);
                cmd.Parameters.AddWithValue("@mbl", textBox4.Text);
                cmd.Parameters.AddWithValue("@email", textBox5.Text);
                cmd.Parameters.AddWithValue("@pass", textBox6.Text);

                con.Open();
                int a = cmd.ExecuteNonQuery();//0 1
                if (a > 0)
                {
                    MessageBox.Show("Data Updated Successfully ! ");

                    ResetContro();
                }
                else
                {
                    MessageBox.Show("Data not Updated ! ");
                }
            }

            else if (textBox1.Text != "" && textBox2.Text != "" && radioButton2.Checked == true)
            {

                SqlConnection con = new SqlConnection(cs);
                string query = "update SELLER set USERNAME=@user,MOBILE=@mbl , EMAIL=@email, PASS=@pass where USERNAME=@user";
                SqlCommand cmd = new SqlCommand(query, con);
                cmd.Parameters.AddWithValue("@user", textBox3.Text);
                cmd.Parameters.AddWithValue("@mbl", textBox4.Text);
                cmd.Parameters.AddWithValue("@email", textBox5.Text);
                cmd.Parameters.AddWithValue("@pass", textBox6.Text);

                con.Open();
                int a = cmd.ExecuteNonQuery();//0 1
                if (a > 0)
                {
                    MessageBox.Show("Data Updated Successfully ! ");

                    ResetContro();
                }
                else
                {
                    MessageBox.Show("Data not Updated ! ");
                }
            }

            else
            {
                MessageBox.Show("Please fill the form", "Information", MessageBoxButtons.OK, MessageBoxIcon.Information);
            }

            
        }
        void ResetContro()
        {
            textBox1.Clear();
            textBox2.Clear();
            textBox3.Clear();
            textBox4.Clear();
            textBox5.Clear();
            textBox6.Clear();
        }
       
        private void button3_Click(object sender, EventArgs e)
        {
            Login newForm = new Login();
            newForm.Show();
            this.Hide();
        }

        private void button3_Click_1(object sender, EventArgs e)
        {
            Login newForm = new Login();
            newForm.Show();
            this.Hide();
        }

    }
}

