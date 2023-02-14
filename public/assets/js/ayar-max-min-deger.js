      function maxMinDeger()
      {
        var q = document.getElementById("qYuzde");
        var w = document.getElementById("wYuzde");
        var m_s = document.getElementById("m_s_Yuzde");
        var h = document.getElementById("hYuzde");

        if(q.value >100)
        {
          q.value =100;
        }

        else if(q.value < 0)
        {
          q.value =0;
        }

        if(w.value >100)
        {
          w.value =100;
        }

        else if(w.value < 0)
        {
          w.value =0;
        }

        if(m_s.value >100)
        {
          m_s.value =100;
        }

        else if(m_s.value < 0)
        {
          m_s.value =0;
        }

        if(h.value >100)
        {
          h.value =100;
        }

        else if(h.value < 0)
        {
          h.value =0;
        }
      }