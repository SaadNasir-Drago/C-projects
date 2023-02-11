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
    public partial class mng_sellers : Form
    {
        string cs = ConfigurationManager.ConnectionStrings["dbcs"].ConnectionString;
        public mng_sellers()
        {
            InitializeComponent(); BindGridView();
        }
        void BindGridView()
        {
            SqlConnection con = new SqlConnection(cs);
            string query = "select * from SELLER";
            SqlDataAdapter sda = new SqlDataAdapter(query, con);
            DataTable data = new DataTable();
            sda.Fill(data);
            dataGridView1.DataSource = data;

            //AUTOSIZE
            dataGridView1.AutoSizeColumnsMode = DataGridViewAutoSizeColumnsMode.Fill;
        }
        
        void ResetContro()
        {
            textBox6.Clear();
            textBox7.Clear();
            textBox5.Clear();
            textBox8.Clear();
        }

        private void dataGridView1_MouseDoubleClick(object sender, MouseEventArgs e)
        {
            textBox6.Text = dataGridView1.SelectedRows[0].Cells[0].Value.ToString();
            textBox7.Text = dataGridView1.SelectedRows[0].Cells[1].Value.ToString();
            textBox5.Text = dataGridView1.SelectedRows[0].Cells[2].Value.ToString();
            textBox8.Text = dataGridView1.SelectedRows[0].Cells[3].Value.ToString();
        }

        private void button4_Click(object sender, EventArgs e)
        {
            User newForm = new User();
            newForm.Show();
            this.Hide();
        }

        private void button1_Click_1(object sender, EventArgs e)
        {
            User newForm = new User();
            newForm.Show();
            this.Hide();
        }

        private void button6_Click(object sender, EventArgs e)
        {
            SqlConnection con = new SqlConnection(cs);

            string query = "delete from SELLER where USERNAME = @user";

            SqlCommand cmd = new SqlCommand(query, con);
            cmd.Parameters.AddWithValue("@user", textBox6.Text);

            con.Open();

            int a = cmd.ExecuteNonQuery();
            if (a >= 0)
            {
                MessageBox.Show("Account Deleted");
                BindGridView();
                ResetContro();


            }
            else
            { MessageBox.Show("Could not delete Account"); }
        }

        private void button7_Click(object sender, EventArgs e)
        {
            SqlConnection con = new SqlConnection(cs);

            string query = "insert into SELLER values(@user, @mbl, @email, @pass)";
            // string query = "select * from login_table where username=@user and pass=@pass";
            SqlCommand cmd = new SqlCommand(query, con);
            cmd.Parameters.AddWithValue("@user", textBox6.Text);
            cmd.Parameters.AddWithValue("@mbl", textBox7.Text);
            cmd.Parameters.AddWithValue("@email", textBox5.Text);
            cmd.Parameters.AddWithValue("@pass", textBox8.Text);
            con.Open();

            int a = cmd.ExecuteNonQuery();
            if (a > 0)
            {
                MessageBox.Show("Account Created");
                BindGridView();
                ResetContro();
            }
            else
            { MessageBox.Show("Could not Create Account"); }
        }

        private void button5_Click(object sender, EventArgs e)
        {
            ResetContro();
        }

    }
}
