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
    public partial class mng_products : Form
    {
        string cs = ConfigurationManager.ConnectionStrings["dbcs"].ConnectionString;
        public mng_products()
        {
            InitializeComponent();
            BindGridView();
            cartInfoShow();
        }

        private void cartInfoShow()
        {
            SqlConnection con = new SqlConnection(cs);
            string query = "select * from FURNITURE";
            SqlDataAdapter sda = new SqlDataAdapter(query, con);
            DataTable data = new DataTable();
            sda.Fill(data);
            dataGridView1.DataSource = data;

            DataGridViewImageColumn dgv = new DataGridViewImageColumn();
            dgv = (DataGridViewImageColumn)dataGridView1.Columns[2];
            dgv.ImageLayout = DataGridViewImageCellLayout.Stretch;
            //autosize
            dataGridView1.AutoSizeColumnsMode = DataGridViewAutoSizeColumnsMode.Fill;
            //Image Hight
            dataGridView1.RowTemplate.Height = 50;
        }

        void BindGridView()
        {
            SqlConnection con = new SqlConnection(cs);
            string query = "select * from FURNITURE";
            SqlDataAdapter sda = new SqlDataAdapter(query, con);
            DataTable data = new DataTable();
            sda.Fill(data);
            dataGridView1.DataSource = data;

            ///Image Column
            DataGridViewImageColumn dgv = new DataGridViewImageColumn();
            dgv = (DataGridViewImageColumn)dataGridView1.Columns[2];
            dgv.ImageLayout = DataGridViewImageCellLayout.Stretch;

            //AUTOSIZE
            dataGridView1.AutoSizeColumnsMode = DataGridViewAutoSizeColumnsMode.Fill;

            //Image Height
            dataGridView1.RowTemplate.Height = 50;

        }
        
        private Image GetPhoto(byte[] photo)
        {
            MemoryStream ms = new MemoryStream(photo);
            return Image.FromStream(ms);
        }
        
        void ResetControl()
        {
            textBox6.Clear();
            textBox7.Clear();
            pictureBox1.Image = Properties.Resources.image;
        }
        private void dataGridView1_MouseDoubleClick(object sender, MouseEventArgs e)
        {
            textBox6.Text = dataGridView1.SelectedRows[0].Cells[0].Value.ToString();
            textBox7.Text = dataGridView1.SelectedRows[0].Cells[1].Value.ToString();

            pictureBox1.Image = GetPhoto((byte[])dataGridView1.SelectedRows[0].Cells[2].Value);
            //pictureBox1.Image = GetPhoto((byte[])dataGridView1.SelectedRows[0].Cells[2].Value);

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

            string query = "insert into FURNITURE values(@fname, @fimg, @price)";
            // string query = "select * from login_table where username=@user and pass=@pass";
            SqlCommand cmd = new SqlCommand(query, con);
            cmd.Parameters.AddWithValue("@fname", textBox6.Text);
            cmd.Parameters.AddWithValue("@fimg", SavePhoto());
            cmd.Parameters.AddWithValue("@price", textBox7.Text);

            con.Open();

            int a = cmd.ExecuteNonQuery();
            if (a > 0)
            {
                MessageBox.Show("Furniture added for sale");
                BindGridView();
                ResetControl();

            }
            else
            { MessageBox.Show("Furniture not added"); }
        }


        private void button3_Click(object sender, EventArgs e)
        {
            ResetControl();
        }

        private void button4_Click(object sender, EventArgs e)
        {
            Admin newForm = new Admin();
            newForm.Show();
            this.Hide();
        }

        private void button2_Click_1(object sender, EventArgs e)
        {
            Admin a1 = new Admin();
            a1.Show();
            this.Hide();
        }

        private void button13_Click(object sender, EventArgs e)
        {
            OpenFileDialog ofd = new OpenFileDialog();
            ofd.Title = "Select Image";
            //ofd.Filter = "PNG File (*.png) | *.png";
            //ofd.Filter = "JPG File (*.jpg) | *.jpg";
            ofd.Filter = "Image File (*.png;*.jpg) | *.png; *.jpg";
            //ofd.Filter = "Image File (All files) *.* | *.*";
            //ofd.ShowDialog();
            if (ofd.ShowDialog() == DialogResult.OK)
            {
                pictureBox1.Image = new Bitmap(ofd.FileName);
            }
        }

        private void button8_Click(object sender, EventArgs e)
        {
            SqlConnection con = new SqlConnection(cs);

            string query = "insert into FURNITURE values(@fname, @price, @fimg)";
            // string query = "select * from login_table where username=@user and pass=@pass";
            SqlCommand cmd = new SqlCommand(query, con);
            cmd.Parameters.AddWithValue("@fname", textBox6.Text);
            cmd.Parameters.AddWithValue("@price", textBox7.Text);
            cmd.Parameters.AddWithValue("@fimg", SavePhoto());

            con.Open();

            int a = cmd.ExecuteNonQuery();
            if (a > 0)
            {
                MessageBox.Show("Furniture Added");
                BindGridView();
                ResetControl();
                cartInfoShow();
            }
            else
            { MessageBox.Show("Could not add furniture"); }
        }

        private void button7_Click(object sender, EventArgs e)
        {
            SqlConnection con = new SqlConnection(cs);

            string query = "delete from FURNITURE where FNAME = @fname";

            SqlCommand cmd = new SqlCommand(query, con);
            cmd.Parameters.AddWithValue("@fname", textBox6.Text);

            con.Open();

            int a = cmd.ExecuteNonQuery();
            if (a >= 0)
            {
                MessageBox.Show("Furniture Deleted");
                BindGridView();
                ResetControl();
                cartInfoShow();

            }
            else
            { MessageBox.Show("Could not delete furniture"); }
        }

        private void button6_Click(object sender, EventArgs e)
        {
            ResetControl();
        }


        private void button1_Click_1(object sender, EventArgs e)
        {
            SqlConnection con = new SqlConnection(cs);
            string query = "update FURNITURE set FNAME=@fname, PRICE=@price , FIMG=@fimg where FNAME = @fname";
            SqlCommand cmd = new SqlCommand(query, con);
            cmd.Parameters.AddWithValue("@fname", textBox6.Text);
            cmd.Parameters.AddWithValue("@price", textBox7.Text);
            cmd.Parameters.AddWithValue("@fimg", SavePhoto());

            con.Open();
            int a = cmd.ExecuteNonQuery();//0 1
            if (a > 0)
            {
                MessageBox.Show("Data Updated Successfully ! ");

                ResetControl();
                cartInfoShow();
            }
            else
            {
                MessageBox.Show("Data not Updated ! ");
            }
        }
    }
    
}
