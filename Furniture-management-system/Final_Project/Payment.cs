using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WindowsFormsApp1
{
    public partial class Payment : Form
    {
        public Payment()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            MessageBox.Show("Order Placed");

            Home newForm = new Home();
            newForm.Show();
            this.Hide();


        }

        private void button2_Click(object sender, EventArgs e)
        {
            Cart newForm = new Cart();
            newForm.Show();
            this.Hide();
        }
    }
}
