<?php

$page = $_GET['page'];
switch ($page) {
    default:
    case 'beranda': include 'beranda.php';
        break;
    case 'petugas_register': include 'petugas_register.php';
        break;
    case 'petugas_proses': include 'petugas_proses.php';
        break;
    case 'petugas_proses_notif': include 'petugas_proses_notif.php';
        break;
    case 'petugas_Delete': include 'petugas_Delete.php';
        break;
    case 'petugas_Edit': include 'petugas_Edit.php';
        break;
    case 'petugas_Show': include 'petugas_Show.php';
        break;
    case 'petugas_Update': include 'petugas_Update.php';
        break;
    case 'user_register': include 'user_register.php';
        break;
    case 'user_proses': include 'user_proses.php';
        break;
    case 'user_proses_notif': include 'user_proses_notif.php';
        break;
    case 'user_Delete': include 'user_Delete.php';
        break;
    case 'user_Edit': include 'user_Edit.php';
        break;
    case 'user_Show': include 'user_Show.php';
        break;
    case 'user_Update': include 'user_Update.php';
        break;
    case 'user_konfirmasi': include 'user_konfirmasi.php';
        break;
    case 'trans_show': include 'trans_show.php';
        break;
    case 'trans_Edit': include 'trans_Edit.php';
        break;
    case 'trans_Update': include 'trans_Update.php';
        break;	
    case 'trans_konfirmasi_pembayaran': include 'trans_konfirmasi_pembayaran.php';
        break;
    case 'trans_selesai_pembayaran': include 'trans_selesai_pembayaran.php';
        break;
    case 'trans_Delete': include 'trans_Delete.php';
        break;
    case 'dump_backup': include 'dump_backup.php';
        break;
    case 'dump_restore': include 'dump_restore.php';
        break;
    case 'bukutamu_delete': include 'bukutamu_delete.php';
        break;
    case 'bukutamu_isi': include 'bukutamu_isi.php';
        break;
    case 'bukutamu_proses_isi': include 'bukutamu_proses_isi.php';
        break;
    case 'bukutamu_show': include 'bukutamu_show.php';
        break;
	case 'artikel_delete': include 'artikel_delete.php';
        break;
	case 'artikel_detail': include 'artikel_detail.php';
        break;
	case 'artikel_edit': include 'artikel_edit.php';
        break;
	case 'artikel_insert': include 'artikel_insert.php';
        break;
	case 'artikel_komentar': include 'artikel_komentar.php';
        break;
	case 'artikel_komentar_proses': include 'artikel_komentar_proses.php';
        break;
	case 'artikel_lihat': include 'artikel_lihat.php';
        break;
	case 'artikel_proses': include 'artikel_proses.php';
        break;
	case 'artikel_show': include 'artikel_show.php';
        break;
	case 'artikel_update': include 'artikel_update.php';
        break;
	case 'penerima_proses': include 'penerima_proses.php';
        break;
	case 'penerima_proses_selesai': include 'penerima_proses_selesai.php';
        break;
	case 'penerima_register': include 'penerima_register.php';
        break;
	case 'penerima_delete': include 'penerima_delete.php';
        break;
	case 'penerima_edit': include 'penerima_edit.php';
        break;
	case 'penerima_show': include 'penerima_show.php';
        break;
	case 'penerima_update': include 'penerima_update.php';
        break;
		case 'pembagian_show': include 'pembagian_show.php';
        break;								
	case 'pembagian_edit': include 'pembagian_edit.php';
        break;										
	case 'pembagian_input': include 'pembagian_input.php';
        break;										
	case 'pembagian_update': include 'pembagian_update.php';	
        break;										
	case 'pembagian_delete': include 'pembagian_delete.php';
        break;
	case 'pembagian_proses_notif': include 'pembagian_proses_notif.php';
        break;	
	case 'hasil_inputan': include 'hasil_inputan.php';
        break;
	case 'pembagian_proses': include 'pembagian_proses.php';
        break;
	case 'pembagian_table': include 'pembagian_table.php';
        break;
	case 'report_pembayaran': include 'report_pembayaran.php';
        break;		
	case 'report_pembagian': include 'report_pembagian.php';
        break;
	case 'admin_detail': include 'admin_detail.php';
        break;
	case 'admin_Edit': include 'admin_Edit.php';
        break;							
	case 'admin_Update': include 'admin_Update.php';
        break;	
	case 'tentang_kami': include 'tentang_kami.php';
        break;									
}
?>