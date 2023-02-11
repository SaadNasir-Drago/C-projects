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
using System.IO;
namespace WindowsFormsApp1
{
    public partial class Add_Rent : Form
    {
        string cs = ConfigurationManager.ConnectionStrings["dbcs"].ConnectionString;
        public Add_Rent()
        {
            InitializeComponent();
        }

        private void button2_Click(object sender, EventArgs e)
        {
           Login newForm = new Login();
            newForm.Show();
            this.Hide();
        }
        
        private void textBox4_Leave(object sender, EventArgs e)
        {
            if (string.IsNullOrEmpty(textBox4.Text) == true)
            {
                textBox4.Focus();
                errorProvider1.SetError(this.textBox4, "Enter information!");
            }
            else
            {
                errorProvider1.Clear();
            }
        }

        private void textBox1_Leave(object sender, EventArgs e)
        {
            if (string.IsNullOrEmpty(textBox1.Text) == true)
            {
                textBox1.Focus();
                errorProvider2.SetError(this.textBox1, "Enter information!");
            }
            else
            {
                errorProvider2.Clear();
            }
        }

        private byte[] SavePhoto()
        {

            MemoryStream ms = new MemoryStream();
            pictureBox1.Image.Save(ms, pictureBox1.Image.RawFormat);
            return ms.GetBuffer();
        }
        
        private void button1_Click(object sender, EventArgs e)
        {

            SqlConnection con = new SqlConnection(cs);

            string query = "insert into FURNITURE values(@fname, @price, @fimg)";
            
            SqlCommand cmd = new SqlCommand(query, con);
            cmd.Parameters.AddWithValue("@fname", textBox4.Text);
            cmd.Parameters.AddWithValue("@price", textBox1.Text);
            cmd.Parameters.AddWithValue("@fimg", SavePhoto());

            con.Open();

            int a = cmd.ExecuteNonQuery();
            if (a > 0)
            {
                MessageBox.Show("Furniture added for rent");
            }
            else
            { MessageBox.Show("Furniture not added"); }
        }

        private void button13_Click(object sender, EventArgs e)
        {
            OpenFileDialog ofd = new OpenFileDialog();
            ofd.Title = "Select Image";
            ofd.Filter = "Image File (All files) *.* | *.*";
            //ofd.ShowDialog();
            if (ofd.ShowDialog() == DialogResult.OK)
            {
                pictureBox1.Image = new Bitmap(ofd.FileName);
            }
        }

        private void button3_Click(object sender, EventArgs e)
        {
            Login newForm = new Login();
            newForm.Show();
            this.Hide();
        }

    }
}
