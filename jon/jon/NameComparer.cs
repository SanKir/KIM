using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace jon
{
    class NameComparer : IComparer<Detal>
    {
        public int Compare(Detal o1, Detal o2)
        {
            if (o1.GetStanok1() > o2.GetStanok1())
            {
                return -1;
            }
            else if (o1.GetStanok1() < o2.GetStanok1())
            {
                return 1;
            }

            return 0;
        }
    }
}
