using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace jon
{
    class Detal
    {
        int number;
        int stanok1;
        int stanok2;
        public Detal()
        {
            number = 1;
            stanok1 = 0;
            stanok2 = 4;
        }
        public Detal(int number, int stanok1, int stanok2)
        {
            this.number = number;
            this.stanok1 = stanok1;
            this.stanok2 = stanok2;
        }
        public int GetNumber()
        {
            return number;
        }
        public int GetStanok1()
        {
            return stanok1;
        }
        public int GetStanok2()
        {
            return stanok2;
        }
    }
}
