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
    public partial class Cart : Form
    {
        string cs = ConfigurationManager.ConnectionStrings["dbcs"].ConnectionString;
        public Cart()
        {
            InitializeComponent();
            BindGridView();
            
         
        }
        void BindGridView()
        {
            SqlConnection con = new SqlConnection(cs);
            string query = "select * from CART2";
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

        private void button2_Click_2(object sender, EventArgs e)
        {
            mng_furniture B1 = new mng_furniture();
            B1.Show();
            this.Hide();
        }

        private void button1_MouseHover(object sender, EventArgs e)
        {
            button1.BackColor = Color.LightGreen;
        }

        private void button1_MouseLeave(object sender, EventArgs e)
        {
            button1.BackColor = Color.LightBlue;
        }

        private void button2_MouseHover(object sender, EventArgs e)
        {
            button2.BackColor = Color.Red;
        }

        private void button2_MouseLeave(object sender, EventArgs e)
        {
            button2.BackColor = Color.White;
        }

        private void button7_Click(object sender, EventArgs e)
        {
            SqlConnection con = new SqlConnection(cs);

            string query = "delete from CART2 where FNAME=@fname ";

            SqlCommand cmd = new SqlCommand(query, con);
            cmd.Parameters.AddWithValue("@fname", textBox1.Text);

            con.Open();

            int a = cmd.ExecuteNonQuery();
            if (a >= 0)
            {
                MessageBox.Show("Removed from cart");

                BindGridView();
                ResetControl();


            }
            else
            { MessageBox.Show("Could not remove from cart"); }
        }

        private void ResetControl()
        {
            textBox1.Clear();
            textBox2.Clear();

            pictureBox1.Image = Properties.Resources.image;
        }

        private void dataGridView1_MouseDoubleClick(object sender, MouseEventArgs e)
        {
            textBox1.Text = dataGridView1.SelectedRows[0].Cells[0].Value.ToString();
            textBox2.Text = dataGridView1.SelectedRows[0].Cells[1].Value.ToString();
            pictureBox1.Image = GetPhoto((byte[])dataGridView1.SelectedRows[0].Cells[2].Value);
        }

        private void button1_Click(object sender, EventArgs e)
        {
            MessageBox.Show("Order Placed");

            Login newForm = new Login();
            newForm.Show();
            this.Hide();
        }

        private void Cart_Load(object sender, EventArgs e)
        {

        }
    }
}
