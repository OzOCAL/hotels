<?php
/* Smarty version 4.3.4, created on 2024-11-27 00:11:20
  from '/Applications/MAMP/htdocs/hotels/mod_reservations/vue/reservationsFicheVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_674663a8dff565_62137674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b47d665957e71c7dd017547de2f35f02cb1d78f8' => 
    array (
      0 => '/Applications/MAMP/htdocs/hotels/mod_reservations/vue/reservationsFicheVue.tpl',
      1 => 1732666278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/left.tpl' => 1,
    'file:public/header.tpl' => 1,
  ),
),false)) {
function content_674663a8dff565_62137674 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/hotels/include/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['titreVue']->value;?>
</title>
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['titreVue']->value;?>
">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="public/favicon.ico">

    <link rel="stylesheet" href="public/assets/css/normalize.css">
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/assets/css/themify-icons.css">
    <link rel="stylesheet" href="public/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="public/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="public/assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="template/assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="public/assets/scss/style.css">
    <link href="public/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
> -->

</head>
<body>


<!-- Left Panel -->


<?php $_smarty_tpl->_subTemplateRender('file:public/left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- FIN : Left Panel -->


<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!--Header -->

    <?php $_smarty_tpl->_subTemplateRender('file:public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- FIN : header -->


    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1><!-- Info --></h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#index.php">Accueil</a></li>
                        <li><a href="#CODE"></a></li>
                        <li class="active"><!-- Libelle --></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">

            <div class="row">

                <div class="col-md-6">

                    <div class="card">
                        <div class="card-header"><strong><?php echo $_smarty_tpl->tpl_vars['titrePage']->value;?>
</strong></div>
                        <form action="index.php" method="POST">

                            <input type="hidden" name="gestion" value="reservations">
                            <input type="hidden" name="action" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['action']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">

                            <div class="card-body card-block">
                            Id : 
                            <input type="text" name="ResNo" value="<?php echo (($tmp = (($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['reservation']->value->getResNo() ?? null : $tmp) ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" readonly><br>
                            Nom : 
                            <input type="text" name="LastName" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['reservation']->value->getLastName() ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"><br>
                            Prénom : 
                            <input type="text" name="FirstName" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['reservation']->value->getFirstName() ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"><br>
                            Adresse : 
                            <input type="text" name="Address" 
                                value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['reservation']->value->getAddress() ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"><br>
                            Ville : 
                            <input type="text" name="City" 
                                value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['reservation']->value->getCity() ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"><br>
                            Région : 
                            <input type="text" name="State" 
                                value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['reservation']->value->getState() ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"><br>
                            Code postal : 
                            <input type="text" name="Postal" 
                                value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['reservation']->value->getPostal() ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"><br>
                            Téléphone : 
                            <input type="text" name="Phone" 
                                value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['reservation']->value->getPhone() ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"><br>
                            Type de paiement : 
                            <input type="text" name="Payment" 
                                value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['reservation']->value->getPayment() ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"><br>
                            Montant : 
                            <input type="text" name="Amount" 
                                value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['reservation']->value->getAmount() ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"><br>
                            Hotel : 
                            <input type="text" name="Hotel" 
                                value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['reservation']->value->getHotel() ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"><br>
                            Chambre : 
                            <input type="text" name="Room" 
                                value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['reservation']->value->getRoom() ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"><br>
                            Date entrée : 
                            <input type="text" name="DateIn" 
                                value="<?php echo (($tmp = smarty_modifier_date_format($_smarty_tpl->tpl_vars['reservation']->value->getDateIn(),"%d/%m/%Y") ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"><br>
                            Date sortie : 
                            <input type="text" name="DateOut" 
                                value="<?php echo (($tmp = smarty_modifier_date_format($_smarty_tpl->tpl_vars['reservation']->value->getDateOut(),"%d/%m/%Y") ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"><br>
                            <?php if ($_smarty_tpl->tpl_vars['action']->value !== 'ajouterReservation') {?>
                            Date d'enregistrement : 
                            <input type="text" name="DateNow" 
                                value="<?php echo (($tmp = smarty_modifier_date_format($_smarty_tpl->tpl_vars['reservation']->value->getDateNow(),"%d/%m/%Y %T") ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" readonly><br>
                            <?php }?>
                            </div>
                            <div class="card-body card-block">
                                <div class="col-md-6"><input type='button' class="btn btn-submit" value='Retour'
                                                             onclick='location.href = "index.php?gestion=reservations"'></div>
                                <?php if ($_smarty_tpl->tpl_vars['action']->value !== null) {?>
                                <div class="col-md-6 "><input type="submit" class="btn btn-submit" value="Valider"></div>
                                <?php }?>
                                <br>
                            </div>
                        </form>
                    </div>
                </div>

            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    <?php echo '<script'; ?>
 src="public/assets/js/vendor/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/plugins.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/main.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/datatables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/buttons.bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/jszip.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/pdfmake.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/vfs_fonts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/buttons.html5.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/buttons.print.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/buttons.colVis.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/datatables-init.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function () {
            $('#bootstrap-data-table-export').DataTable();
        });
    <?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
