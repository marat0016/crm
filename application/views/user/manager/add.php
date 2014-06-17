<?=$this->load->view("theme/head");?>

<link rel="stylesheet" href="<?=config_item('base_url');?>/assets/js/datepicker/datepicker.css" type="text/css" />

<style>
    .newInputClass{
        border-bottom: 1px dashed #ccc;
        padding: 10px 0
    }
</style>

  <section>
    <section class="hbox stretch">
        <?=$this->load->view("theme/left-menu");?>
        <section id="content">
        <section class="vbox">
          <section class="scrollable padder">
            <div class="m-b-md">
              <h3 class="m-b-none">Добавить менеджера</h3>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <form data-validate="parsley" method="post">
                  <section class="panel panel-default">
                    <header class="panel-heading"> <span class="h4">Информация о менеджере</span> </header>
                    <div class="panel-body">
                        <p class="text-muted"><?php echo validation_errors(); ?></p>
                        <div class="form-group">
                            <label>Имя Фамилия</label>
                            <input type="text" name="name" class="form-control" data-required="true">
                        </div>
                        <div class="form-group pull-in clearfix">
                            <div class="col-sm-6">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" data-required="true" data-type="email">
                            </div>
                            <div class="col-sm-6">
                                <label>Пароль</label>
                                <input type="password" name="password" class="form-control" id="pwd" data-required="true">
                            </div>
                        </div>
                    </div>
                    <footer class="panel-footer text-right bg-light lter">
                        <button type="submit" class="btn btn-success btn-s-xs">Добавить</button>
                    </footer>
                  </section>
                </form>
              </div>
              <div class="col-sm-6">
                <form id="guessform">
                  <section class="panel panel-default">
                    <header class="panel-heading">
                      <ul class="nav nav-tabs pull-right">
                        <li><a href="#tab1" data-toggle="tab">Guess</a></li>
                        <li><a href="#tab2" data-toggle="tab">Result</a></li>
                      </ul>
                      <span class="font-bold">Guess Game</span> </header>
                    <div class="panel-body">
                      <div class="tab-content">
                        <div class="tab-pane text-center" id="tab1">
                          <p class="text-center h4 m-t m-b">Guess a number between 1 and 50!</p>
                          <input type="text" class="no-border b-b input-s-sm h1 inline text-center text-success wrapper-lg" id="gn">
                          <p class="text-center h4 m-t m-b text-danger" id="gi">.</p>
                        </div>
                        <div class="tab-pane text-center wrapper-xl" id="tab2">
                          <h1 class="text-danger m-b-xl" id="answer"></h1>
                          <h2 class="text-success m-b-xl">Correct!!</h2>
                          <p class="h4">You guess <span id="count"></span> time(s), [<span id="num"></span> ]</p>
                        </div>
                      </div>
                    </div>
                    <footer class="panel-footer text-right bg-light lter">
                      <ul class="pager wizard m-n">
                        <li class="previous"><a href="#">Try again</a></li>
                        <li class="next"><a href="#">Guess</a></li>
                      </ul>
                    </footer>
                  </section>
                </form>
              </div>
            </div>
          </section>
        </section>
        <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> 
        </section>


<script src="<?=config_item('base_url');?>/assets/js/app.v1.js"></script>        
<script src="<?=config_item('base_url');?>/assets/js/app.plugin.js"></script>
<script src="<?=config_item('base_url');?>/assets/js/parsley/parsley.min.js"></script>
<script src="<?=config_item('base_url');?>/assets/js/datepicker/bootstrap-datepicker.js"></script>    
<script src="<?=config_item('base_url');?>/assets/js/wizard/jquery.bootstrap.wizard.js"></script>
<script src="<?=config_item('base_url');?>/assets/js/wizard/demo.js"></script>        
<?=$this->load->view("theme/footer");?>