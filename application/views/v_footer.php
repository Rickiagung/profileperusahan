<footer id="fh5co-footer" role="contentinfo">

		<div class="container">
			<div class="col-md-8 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
			<h2>KONTAK</h2>
                                <p>Sekretariat PPID BKD Provinsi Jawa Tengah</p>
                                <p>Jl. Stadion Selatan No. 1</p>
                                <p>Telp. (024) 8318846, 8415813, 8319421</p>
                                <p>Fax. (024) 8318890</p> 
                                <P>Semarang 50136</P>               
                                <p>Email : <a href="#">bkd@jatengprov.go.id</a></p>
			</div>
		

			<div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>Follow Us</h3>
				<ul class="fh5co-social">
					<li><a href="https://twitter.com/bkdjatengprov"><i class="icon-twitter"></i></a></li>
					<li><a href="https://id-id.facebook.com/bkdjatengprov"><i class="icon-facebook"></i></a></li>
					<li><a href="https://www.instagram.com/bkdprovjateng"><i class="icon-instagram"></i></a></li>
					<?php
                $main = $this->db->get_where('tb_menu', array('kat_menu' => 0));
                foreach ($main->result() as $m) {
                    // chek ada submenu atau tidak
                    $sub = $this->db->get_where('tb_menu', array('kat_menu' => $m->id_menu));
                    if ($sub->num_rows() > 0) {
                        // buat menu + sub menu
                        echo '<li>' . anchor($m->link, '<i ></i>
                                                         <span class="treeview">' .$m->nama_menu . '</span>
                                                         <b class="fa fa-angle-left pull-right"></b>', array('class' => 'dropdown-toggle'));
                        echo "<ul class='treeview-menu'>";
                        foreach ($sub->result() as $s) {
                            echo '<li>' . anchor($s->link, '<i class="' . $s->icon . '"></i>' . $s->nama_menu) . '</li>';
                        }
                        echo "</ul>";
                        echo '</li>';
                    } else {
                        // single menu
                        echo '<li>' . anchor($m->link, '<i class="' . $m->icon . ' fa-lg">
                                                         </i>  <span class="treeview">' . $m->nama_menu . '</span>') . '</li>';
                    }                
                } 
            ?>
				</ul>
			</div>


			<div class="col-md-12 fh5co-copyright text-center">
				<p>&copy; 2020 by <a href="http://mfikri.com/" target="_blank"></a>. All Rights Reserved.</p>
			</div>

		</div>
	</footer>
