<?php
/* Smarty version 4.3.4, created on 2024-11-26 00:54:52
  from '/Applications/MAMP/htdocs/hotels/mod_paymenttypes/vue/paymenttypesFicheVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67451c5ce15331_78580141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8941e75789f4d049acd4d7877d00a86ed9662f7' => 
    array (
      0 => '/Applications/MAMP/htdocs/hotels/mod_paymenttypes/vue/paymenttypesFicheVue.tpl',
      1 => 1732582318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/left.tpl' => 1,
    'file:public/header.tpl' => 1,
  ),
),false)) {
function content_67451c5ce15331_78580141 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

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
                        <h1>
                            <!-- Info -->
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#index.php">Accueil</a></li>
                            <li><a href="#CODE">
                                    <!-- Libelle -->
                                </a></li>
                            <li class="active">
                                <!-- Libelle -->
                            </li>
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
                    <div class="card-header"><strong><?php echo (($tmp = $_smarty_tpl->tpl_vars['titrePage']->value ?? null)===null||$tmp==='' ? 'Formulaire' ?? null : $tmp);?>
</strong></div>
                    <form action="index.php" method="POST">
                        <div class="card-body card-block">
                            Id : 
                            <input type="text" name="Payment" 
                                value="<?php echo (($tmp = (($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['unPaymentType']->value->getPayment() ?? null : $tmp) ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" 
                                readonly><br>
                            Description : 
                            <input type="text" name="Description" 
                                value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['unPaymentType']->value->getDescription() ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                        </div>
                        <div class="card-body card-block">
                            <input type="hidden" name="gestion" value="paymenttypes">
                            <input type="hidden" name="action" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['action']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                            <div class="col-md-6">
                                <a href="index.php?gestion=paymenttypes" class="btn btn-submit">Retour</a>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['action']->value) {?>
                                <div class="col-md-6">
                                    <input type="submit" class="btn btn-submit" value="Valider">
                                </div>
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
            $(document).ready(function() {
                $('#bootstrap-data-table-export').DataTable();
            });
        <?php echo '</script'; ?>
>

</body>

</html><?php }
}
