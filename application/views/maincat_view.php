<?php
$arr = $data->_data;

    print ' <script>
  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,\'script\',\'https://www.google-analytics.com/analytics.js\',\'ga\');

  ga(\'create\', \'UA-92806288-1\', \'auto\');
  ga(\'send\', \'pageview\');

</script>
        <hr style="margin-top: 20px; margin-bottom: 40px;"><section>
                    <div class="container">
                        <div class="row">';
    while ($row = $arr->fetch()) {
        print '             
                            <div class="col-lg-4 col-md-4 mainfont">
                                <div class="maincatimg">
                                    <a href="/prod/cat/?cat=' . $row['caten'] . '"><img src="/imag/prod/catpics/' . $row['caten'] . '.jpg" alt=""/></a>
                                    <p>' . $row['cat' . $data->getCurrentLanguage() . ''] . '</p>
                                </div>
                            </div>';
    }
    print '     </div>
                    </div>
                </section>';