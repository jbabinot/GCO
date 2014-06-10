<?php 
include ('../../../inc/header.php');
include ('../../../inc/pagecontainer.php');
$idclient = $_GET['idclient'];
$sql_client = mysql_query("SELECT * FROM client WHERE idclient =".$idclient);
$donnee_client = mysql_fetch_array($sql_client);
?> 
<script type="text/javascript">
$("#date").mask("99/99/9999");
</script>
  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">
      <ul class="breadcrumb">
        <li>
          <p>VOUS ETES ICI</p>
        </li>
        <li><a href="#">Donnée</a> </li>
        <li><a href="index.php">Client</a></li>
        <li><a href="nouv.client.php" class="active"><span class="semi-bold">Modifier Client</span></a></li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>CLIENT - <span class="semi-bold">Modifier Client</span></h3>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple transparent">
            <div class="grid-title">
              <h4>Modifier <span class="semi-bold">Client</span></h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body ">
              <div class="row">
                <form id="commentForm" action="valid.modif.client.php" method="post">
                  <div id="rootwizard" class="col-md-12">
                    <div class="form-wizard-steps">
                      <ul class="wizard-steps">
                        <li class="" data-target="#step1"> <a href="#tab1" data-toggle="tab"> <span class="step">1</span> <span class="title">Information de Contact</span> </a> </li>
                        <li data-target="#step2" class=""> <a href="#tab2" data-toggle="tab"> <span class="step">2</span> <span class="title">Information Société</span> </a> </li>
                        <li data-target="#step3" class=""> <a href="#tab3" data-toggle="tab"> <span class="step">3</span> <span class="title">Information de Paiement</span> </a> </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="tab-content transparent">
                      <div class="tab-pane" id="tab1"> <br>
                        <h4 class="semi-bold">Etape 1 - <span class="light">Information de Contact</span></h4>
                        <br>
                        <div class="row form-row">
                          <div class="col-md-12">
                            <input type="text" placeholder="<?php echo $donnee_client['idclient']; ?>" class="form-control no-boarder " name="idclient" id="txtFirstName" value= "<?php echo $donnee_client['idclient']; ?>" hidden>
                          </div>
                          <div class="col-md-12">
                            <select name="civilite" class="form-control no-boarder " placeholder="Civilité" value=="<?php echo $donnee_client['civilite']; ?>">
                              <option value="1">Monsieur</option>
                              <option value="2">Madame</option>
                              <option value="3">Mademoiselle</option>
                              <option value="4">Entreprise</option>
                              <option value="5">SARL</option>
                              <option value="6">SA</option>
                              <option value="7">EURL</option>
                              <option value="8">SAS</option>
                            </select>
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-md-6">
                            <input type="text" placeholder="Nom" class="form-control no-boarder " name="nom" id="txtFirstName" value = "<?php echo $donnee_client['nom']; ?>">
                          </div>
                          <div class="col-md-6">
                            <input type="text" placeholder="Prénom" class="form-control no-boarder " name="prenom" id="txtLastName" value = "<?php echo $donnee_client['prenom']; ?>">
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-md-12">
                            <textarea name="adresse1" class="form-control no-boarder " placeholder="Adresse du client"><?php echo $donnee_client['adresse1']; ?></textarea>
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-md-12">
                            <textarea name="adresse2" class="form-control no-boarder " placeholder="Complément d'Adresse du client"><?php echo $donnee_client['adresse2']; ?></textarea>
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-md-2">
                            <input type="text" placeholder="Code Postal" class="form-control no-boarder " name="cp" id="txtLastName" value="<?php echo $donnee_client['cp']; ?>">
                          </div>
                          <div class="col-md-10">
                            <input type="text" placeholder="Ville" class="form-control no-boarder " name="ville" id="txtLastName" value="<?php echo $donnee_client['ville']; ?>">
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-md-4">
                            <input type="text" placeholder="Tel Fixe" class="form-control no-boarder " name="tel" id="txtLastName" value="<?php echo $donnee_client['tel']; ?>">
                          </div>
                          <div class="col-md-4">
                            <input type="text" placeholder="Fax" class="form-control no-boarder " name="fax" id="txtLastName" value="<?php echo $donnee_client['fax']; ?>">
                          </div>
                          <div class="col-md-4">
                            <input type="text" placeholder="Tel Portable" class="form-control no-boarder " name="port" id="txtLastName" value="<?php echo $donnee_client['port']; ?>">
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-md-12">
                            <input type="text" placeholder="Adresse Mail" class="form-control no-boarder " name="mail" id="txtLastName" value="<?php echo $donnee_client['mail']; ?>">
                          </div>
                        </div>
                        <div class="row form-row">
                          <label>Responsable client</label>
                          <div class="col-md-12">
                            <select name="iduser" class="form-control no-boarder " >
                              <option value="1" <?php if ($donnee_client['iduser']=='1'){ echo "selected";} ?>>Corentin</option>
                              <option value="2" <?php if ($donnee_client['iduser']=='2'){ echo "selected";} ?>>Maxime</option>
                              <option value="3" <?php if ($donnee_client['iduser']=='3'){ echo "selected";} ?>>Alexis</option>
                              <option value="4" <?php if ($donnee_client['iduser']=='4'){ echo "selected";} ?>>Ludivine</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="tab2"> <br>
                        <h4 class="semi-bold">Etape 2 - <span class="light">Information Société</span></h4>
                        <br>
                        <div class="row form-row">
                          <div class="col-md-12">
                            <input type="text" placeholder="Raison Social" class="form-control no-boarder " name="raison_social" id="txtCountry" value="<?php echo $donnee_client['raison_social']; ?>">
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-md-12">
                            <input type="text" placeholder="Numéro de Siret" class="form-control no-boarder " name="num_siret" id="txtCountry" value="<?php echo $donnee_client['num_siret']; ?>">
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-md-12">
                            <input type="text" placeholder="Numéro de TVA" class="form-control no-boarder " name="num_tva" id="txtCountry" value="<?php echo $donnee_client['num_tva']; ?>">
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-md-12">
                            <label>Encours Disponible</label>
                            <input type="text" placeholder="Encours disponible" class="form-control no-boarder " name="encour" id="txtCountry" value="<?php echo $donnee_client['encour']; ?>">
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="tab3"> <br>
                        <h4 class="semi-bold">Etape 3 - <span class="light">Information de Paiement</span></h4>
                        <br>
                        <div class="row form-row">
                          <div class="col-md-12">
                            <label>Mode De paiement par default</label>
                              <select name="mode_paiement_default" class="form-control no-boarder " placeholder="mode_paiement_default" value="<?php echo $donnee_client['mode_paiement_default']; ?>">
                                <option value="1">CB Comptant</option>
                                <option value="2">CB Différé</option>
                                <option value="3">Chèque Comptant</option>
                                <option value="4">Chèque Différé</option>
                                <option value="5">Virement</option>
                                <option value="6">Prélèvement</option>
                                <option value="7">Paypal</option>
                              </select>
                            </div>
                        </div>
                        <h5>RIB</h5>
                        <div class="row form-row">
                          <div class="col-md-2">
                            <input type="text" placeholder="Banque" class="form-control no-boarder " name="code_banque" id="txtCountry" value="<?php echo $donnee_client['code_banque']; ?>">
                          </div>
                          <div class="col-md-2">
                            <input type="text" placeholder="Guichet" class="form-control no-boarder " name="code_guichet" id="txtCountry" value="<?php echo $donnee_client['code_guichet']; ?>">
                          </div>
                          <div class="col-md-6">
                            <input type="text" placeholder="Numéro de Compte" class="form-control no-boarder " name="code_cpt" id="txtCountry" value="<?php echo $donnee_client['code_cpt']; ?>">
                          </div>
                          <div class="col-md-2">
                            <input type="text" placeholder="Clé rib" class="form-control no-boarder " name="cle_rib" id="txtCountry" value="<?php echo $donnee_client['cle_rib']; ?>">
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-md-8">
                            <input type="text" placeholder="IBAN" class="form-control no-boarder " name="iban" id="txtCountry"value="<?php echo $donnee_client['iban']; ?>">
                          </div>
                          <div class="col-md-4">
                            <input type="text" placeholder="BIC" class="form-control no-boarder " name="bic" id="txtCountry" value="<?php echo $donnee_client['bic']; ?>">
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-md-8">
                            <label>Paypal</label>
                            <input type="text" placeholder="Adresse Utiliser pour Paypal" class="form-control no-boarder " name="mail_paypal" id="txtCountry" value="<?php echo $donnee_client['mail_paypal']; ?>">
                          </div>
                        </div>
                        


                        <button class="btn btn-primary btn-cons" type="submit">Valider</button>
                        <button class="btn btn-danger btn-cons" type="reset">Reset</button>
                      </div>
                      <ul class=" wizard wizard-actions">
                        <li class="previous first" style="display:none;"><a href="javascript:;" class="btn">&nbsp;&nbsp;First&nbsp;&nbsp;</a></li>
                        <li class="previous"><a href="javascript:;" class="btn">&nbsp;&nbsp;Previous&nbsp;&nbsp;</a></li>
                        <li class="next last" style="display:none;"><a href="javascript:;" class="btn btn-primary">&nbsp;&nbsp;Last&nbsp;&nbsp;</a></li>
                        <li class="next"><a href="javascript:;" class="btn btn-primary">&nbsp;&nbsp;Next&nbsp;&nbsp;</a></li>
                      </ul>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- END PAGE -->
<!-- END CONTAINER -->
<!-- BEGIN CORE JS FRAMEWORK-->
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/breakpoints.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<!-- END CORE JS FRAMEWORK -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/boostrap-form-wizard/js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-inputmask/jquery.inputmask.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="<?php echo $rootsite; ?>assets/js/form_validations.js" type="text/javascript"></script>
<!-- BEGIN CORE TEMPLATE JS -->
<script src="<?php echo $rootsite; ?>assets/js/core.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/js/demo.js" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS -->
<!-- END JAVASCRIPTS -->
</body>
</html>