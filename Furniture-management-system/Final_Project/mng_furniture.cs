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
    public partial class mng_furniture : Form
    {
        string cs = ConfigurationManager.ConnectionStrings["dbcs"].ConnectionString;
        public mng_furniture()
        {
            InitializeComponent();
            cartInfoShow();
            cartInfoShow1();
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

        private void cartInfoShow1()
        {
            SqlConnection con = new SqlConnection(cs);
            string query = "select * from FURNITURE";
            SqlDataAdapter sda = new SqlDataAdapter(query, con);
            DataTable data = new DataTable();
            sda.Fill(data);
            dataGridView2.DataSource = data;

            DataGridViewImageColumn dgv = new DataGridViewImageColumn();
            dgv = (DataGridViewImageColumn)dataGridView2.Columns[2];
            dgv.ImageLayout = DataGridViewImageCellLayout.Stretch;
            //autosize
            dataGridView2.AutoSizeColumnsMode = DataGridViewAutoSizeColumnsMode.Fill;
            //Image Hight
            dataGridView2.RowTemplate.Height = 50;
        }
       
        private byte[] SavePhoto()
        {
            MemoryStream ms = new MemoryStream();
            pictureBox1.Image.Save(ms, pictureBox1.Image.RawFormat);
            
            return ms.GetBuffer();
        }

        private byte[] SavePhoto1()
        {
            MemoryStream ms = new MemoryStream();
            pictureBox5.Image.Save(ms, pictureBox1.Image.RawFormat);

            return ms.GetBuffer();
        }

        private void ResetControl()
        {
            textBox6.Clear();
            textBox7.Clear();
            textBox1.Clear();
            textBox2.Clear();
           
            pictureBox1.Image = Properties.Resources.image;
            pictureBox5.Image = Properties.Resources.image;
        }

        private void dataGridView2_MouseDoubleClick(object sender, MouseEventArgs e)
        {
            textBox6.Text = dataGridView1.SelectedRows[0].Cells[0].Value.ToString();
            textBox7.Text = dataGridView1.SelectedRows[0].Cells[1].Value.ToString();
            pictureBox1.Image = GetPhoto((byte[])dataGridView1.SelectedRows[0].Cells[2].Value);
        }

        private Image GetPhoto(byte[] value)
        {
            MemoryStream ms = new MemoryStream(value);
            return Image.FromStream(ms);
        }

        private void button11_Click(object sender, EventArgs e)
        {
            ResetControl();
        }

        private void dataGridView2_MouseDoubleClick_1(object sender, MouseEventArgs e)
        {
            textBox1.Text = dataGridView2.SelectedRows[0].Cells[0].Value.ToString();
            textBox2.Text = dataGridView2.SelectedRows[0].Cells[1].Value.ToString();
            pictureBox5.Image = GetPhoto((byte[])dataGridView2.SelectedRows[0].Cells[2].Value);
        }

        private void button2_Click_1(object sender, EventArgs e)
        {
            Rent_Panel.BringToFront();
        }

        private void button5_Click_1(object sender, EventArgs e)
        {
            Buy_Panel.BringToFront();
        }

        private void button3_Click_1(object sender, EventArgs e)
        {
            Login L1 = new Login();
            L1.Show();
            this.Hide();
        }

        private void button4_Click_1(object sender, EventArgs e)
        {
            OpenFileDialog ofd = new OpenFileDialog();
            ofd.Title = "Select Image";
            ofd.Filter = "IMAGE File (*.png; *.jpg) | *.png; *.jpg";
            ofd.ShowDialog();

            if (ofd.ShowDialog() == DialogResult.OK)
            {
                pictureBox1.Image = new Bitmap(ofd.FileName);
            }
        }

        private void button8_Click_1(object sender, EventArgs e)
        {
            SqlConnection con = new SqlConnection(cs);

            string query = "insert into CART2 values(@fname, @price, @img)";

            SqlCommand cmd = new SqlCommand(query, con);

            cmd.Parameters.AddWithValue("@fname", textBox6.Text);
            cmd.Parameters.AddWithValue("@price", textBox7.Text);
            cmd.Parameters.AddWithValue("@img", SavePhoto());


            con.Open();

            int a = cmd.ExecuteNonQuery();
            if (a > 0)
            {
                MessageBox.Show("Furniture added to cart");
                cartInfoShow();
                ResetControl();

            }
            else
            { MessageBox.Show("Furniture not added to cart"); }
        }

        private void button7_Click(object sender, EventArgs e)
        {
            this.Hide();
            Cart newform = new Cart();
            newform.Show();
            cartInfoShow1();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            OpenFileDialog ofd = new OpenFileDialog();
            ofd.Title = "Select Image";
            ofd.Filter = "IMAGE File (*.png; *.jpg) | *.png; *.jpg";
            ofd.ShowDialog();

            if (ofd.ShowDialog() == DialogResult.OK)
            {
                pictureBox5.Image = new Bitmap(ofd.FileName);
            }
        }

        private void mng_furniture_Load(object sender, EventArgs e)
        {

        }

        private void Rent_Panel_Paint(object sender, PaintEventArgs e)
        {

        }

        private void button6_Click_1(object sender, EventArgs e)
        {
            SqlConnection con = new SqlConnection(cs);

            string query = "insert into CART2 values(@fname, @price, @img)";

            SqlCommand cmd = new SqlCommand(query, con);

            cmd.Parameters.AddWithValue("@fname", textBox1.Text);
            cmd.Parameters.AddWithValue("@price", textBox2.Text);
            cmd.Parameters.AddWithValue("@img", SavePhoto1());


            con.Open();

            int a = cmd.ExecuteNonQuery();
            if (a > 0)
            {
                MessageBox.Show("Furniture added to cart");
                cartInfoShow1();
                ResetControl();

            }
            else
            { MessageBox.Show("Furniture not added to cart"); }
        }
    }
}
