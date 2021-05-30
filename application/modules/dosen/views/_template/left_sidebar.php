<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->model('maccount', 'account');
?>
   <aside class="main-sidebar">
      <section class="sidebar">
      <div class="user-panel">
         <div class="pull-left image">
            <img src="<?php echo base_url("assets/img/avatar.jpg"); ?>" class="img-circle" alt="User Image">
         </div>
         <div class="pull-left info">
            <p><small><?php echo $this->session->userdata('account')->name; ?></small></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
         </div>
      </div>
      <ul class="sidebar-menu">
        <li class="header">MENU NAVIGASI</li>
        <li class="<?php echo active_link_controller('main'); ?>">
            <a href="<?php echo site_url('dosen/main') ?>">
               <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>
        <li class="<?php echo active_link_multiple(array('entrypoint','transkrip')); ?>">
            <a href="<?php echo site_url('dosen/entrypoint') ?>">
               <i class="fa fa-pencil"></i> <span>Entry Nilai</span>
            </a>
        </li>
        <li class="treeview <?php echo active_link_multiple(array('krs','pembimbing')); ?>">
            <a href="#">
               <i class="fa fa-users"></i> <span>Pembimbing Akademik</span>
               <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
               </span>
            </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php echo site_url('dosen/pembimbing/krs') ?>" class="<?php echo active_link_method('krs','pembimbing'); ?>"><i class="fa fa-minus"></i> Verifikasi KRS</a>
            </li>
            <li>
              <a href="<?php echo site_url('dosen/pembimbing') ?>" class="<?php echo active_link_method('index','pembimbing'); ?>"><i class="fa fa-minus"></i> Data Mahasiswa</a>
            </li>
          </ul>
        </li>
        <!--
        <li class="treeview <?php echo active_link_multiple(array('course','lecturer')); ?>">
            <a href="#">
               <i class="fa fa-database"></i> <span>Master Data</span>
               <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
               </span>
            </a>
          <ul class="treeview-menu">
            <li>
              <a href="" class="<?php echo active_link_controller('course'); ?>"><i class="fa fa-minus"></i> Mata Kuliah</a>
            </li>
            <li>
              <a href="" class="<?php echo active_link_controller('lecturer'); ?>"><i class="fa fa-minus"></i> Dosen</a>
            </li>
            <li>
              <a href="" class="<?php echo active_link_controller('student'); ?>"><i class="fa fa-minus"></i> Mahasiswa</a>
            </li>
          </ul>
        </li>
        -->
        <li class="<?php echo active_link_controller('jadwal'); ?>">
            <a href="">
               <i class="fa fa-calendar"></i> <span>Jadwal Dosen</span>
            </a>
        </li>
      </ul>
      </section>
   </aside>
   <div class="content-wrapper">
      <section class="content-header">
        <?php 
        /**
         * Generated Page Title
         *
         * @return string
         **/
          echo $page_title;

        /**
         * Generate Breadcrumbs from library
         *
         * @var string
         **/
          echo $breadcrumb; 
        ?>
      </section>
      <section class="content">
<?php  
/* End of file left_sidebar.php */
/* Location: ./application/modules/Dosen/views/_template/left_sidebar.php */
?>