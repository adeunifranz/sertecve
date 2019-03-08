<?php 
use yii\helpers\Html;
 ?>
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> 
<?=                 Html::a('
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Principal</span>',['site/index'],[
                            'aria-expanded'=>"false",
                            'class'=>'sidebar-link waves-effect waves-dark sidebar-link active']) ?>
                        </li>
                        <li class="sidebar-item"> 
<?=                 Html::a('
                        <i class="ti-user"></i>
                        <span class="hide-menu">Personal</span>',['/personal'],[
                            'aria-expanded'=>"false",
                            'class'=>'sidebar-link waves-effect waves-dark sidebar-link active']) ?>
                        </li>

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>