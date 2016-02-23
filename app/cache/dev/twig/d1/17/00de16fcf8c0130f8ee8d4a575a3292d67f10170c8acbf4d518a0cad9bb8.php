<?php

/* BenUserBundle:admin:index.html.twig */
class __TwigTemplate_d11700de16fcf8c0130f8ee8d4a575a3292d67f10170c8acbf4d518a0cad9bb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("BenAssociationBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BenAssociationBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.title.main"), "html", null, true);
        echo " | ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<a class=\"btn btn-inverse pull-right btn-sm\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_archive"), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.title.archive"), "html", null, true);
        echo " <span class=\"fui-arrow-right\"></span></a>
<h2><span class=\"fui-user\"></span> ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.title.main"), "html", null, true);
        echo "</h2>
        <form  id=\"jsForm\" role=\"form\" method=\"post\" action=\"\">
          <input id=\"pagenumber\" type=\"hidden\" name=\"searchParam[page]\" value=\"1\"> 
          <input type=\"hidden\" name=\"searchParam[archive]\" value=\"0\"> 
          <input id=\"sortBy\" type=\"hidden\" name=\"searchParam[sortBy]\"> 
          <input id=\"sortDir\" type=\"hidden\" name=\"searchParam[sortDir]\"> 
            <div class=\"row hidden-print\">
              <div class=\"col-md-5 col-xs-6\">
                  <div class=\"form-group\">
                     <div class=\"input-group\">                                     
                        <input type=\"text\" name=\"searchParam[keyword]\" class=\"form-control\" placeholder=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.search"), "html", null, true);
        echo "\">
                       <span class=\"input-group-btn\">
                             <button type=\"submit\" class=\"btn\"><span class=\"fui-search\"></span></button>
                         </span>
                     </div>
                  </div>
              </div>
              <div class=\"col-md-7 col-xs-6\">
                <div class=\"btn-group pull-right\">              
                  <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#searchModal\"><span class=\"fui-search\"></span> ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.advanced"), "html", null, true);
        echo "</button>
                  <button class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
                    <span class=\"caret\"></span>
                  </button>
                  <span class=\"dropdown-arrow dropdown-arrow-inverse\"></span>
                  <ul class=\"dropdown-menu dropdown-inverse\">
                    <li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_new_user"), "html", null, true);
        echo "\"><span class=\"fui-plus\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.action.new"), "html", null, true);
        echo "</a></li>
                    ";
        // line 33
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 34
            echo "                    <li><a href=\"#\" class=\"js-enable\" data-action=\"1\"><span class=\"fui-check\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.enable"), "html", null, true);
            echo "</a></li>
                    <li><a href=\"#\" class=\"js-enable\" data-action=\"0\"><span class=\"glyphicon glyphicon-ban-circle\"></span> ";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.disable"), "html", null, true);
            echo "</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"#\" class=\"js-promote\" data-action=\"admin\"><span class=\"fui-user text-warning\"></span> ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.action.promote.admin"), "html", null, true);
            echo "</a></li>
                    <li><a href=\"#\" class=\"js-promote\" data-action=\"manager\"><span class=\"fui-user text-success\"></span> ";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.action.promote.manager"), "html", null, true);
            echo "</a></li>
                    <li><a href=\"#\" class=\"js-promote\" data-action=\"user\"><span class=\"fui-user\"></span> ";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.action.promote.user"), "html", null, true);
            echo "</a></li>
                    <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#groupModal\"><span class=\"glyphicon glyphicon-pushpin\"></span> ";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.action.group"), "html", null, true);
            echo "</a></li>
                    ";
        }
        // line 42
        echo "                    <li class=\"divider\"></li>
                    <li><a href=\"#\" id=\"js-badge\"><span class=\"fui-credit-card\"></span> ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.action.carte.show"), "html", null, true);
        echo "</a></li>
                    <li><a href=\"#\" id=\"js-tiquet\"><span class=\"fui-tag\"></span> ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.action.tiquet"), "html", null, true);
        echo "</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"#\" id=\"js-mail\"><span class=\"glyphicon glyphicon-envelope\"></span> ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.action.mail"), "html", null, true);
        echo "</a></li>
                    <li><a href=\"#\" id=\"js-sms\"><span class=\"glyphicon glyphicon-comment\"></span> ";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.sms"), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_users_export"), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-export\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.tocsv"), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_export_xml"), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-export\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.toxml"), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_export_excel"), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-export\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.toexcel"), "html", null, true);
        echo "</a></li>
                    <li><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_import_csv"), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-import\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.import"), "html", null, true);
        echo "</a></li>
                    ";
        // line 52
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 53
            echo "                    <li class=\"divider\"></li>
                    <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#confirmationModal\"><span class=\"glyphicon glyphicon-trash\"></span> ";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.delete"), "html", null, true);
            echo "</a></li>
                    ";
        }
        // line 56
        echo "                  </ul>
                </div>
              </div><!-- /.col-lg-2 -->
            </div><!-- /.row -->
            <div class=\"table-responsive\">
            <table class=\"table table-hover table-bordered table-striped\">
                <thead>
                    <tr>
                        <th><label class=\"checkbox no-label toggle-all\" for=\"checkbox-table-1\"><span class=\"icons\"><span class=\"first-icon fui-checkbox-unchecked\"></span><span class=\"second-icon fui-checkbox-checked\"></span></span><span class=\"icons\"><span class=\"first-icon fui-checkbox-unchecked\"></span><span class=\"second-icon fui-checkbox-checked\"></span></span><input type=\"checkbox\" value=\"\" id=\"checkbox-table-1\" data-toggle=\"checkbox\"></label></th>
                        ";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "userTable", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 66
            echo "                          ";
            if ($this->getAttribute($context["item"], "visible", array())) {
                // line 67
                echo "                          ";
                if (twig_in_filter($this->getAttribute($context["item"], "fieldName", array()), array(0 => "firstname", 1 => "birthday", 2 => "familyname"))) {
                    // line 68
                    echo "                          <th class=\"sortable\"><a href=\"#\" class=\"js-sort\" data-order=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "fieldname", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nicename", array()), "html", null, true);
                    echo "<span class=\"glyphicon glyphicon-sort pull-right\"></span></a></th>
                          ";
                } else {
                    // line 70
                    echo "                          <th>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nicename", array()), "html", null, true);
                    echo "</th>
                          ";
                }
                // line 72
                echo "                          ";
            }
            // line 73
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                        <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.meta.actions"), "html", null, true);
        echo "</th>
                    </tr>
                </thead>
                <tbody id=\"dataContainer\"></tbody>
            </table>
            </div>

            <div class=\"caption\">
              <em><strong>";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.meta.total"), "html", null, true);
        echo ":</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("user.meta.count", (isset($context["entitiesLength"]) ? $context["entitiesLength"] : $this->getContext($context, "entitiesLength"))), "html", null, true);
        echo "</em>
            </div>

            ";
        // line 85
        $this->env->loadTemplate("BenUserBundle:admin:search.html.twig")->display($context);
        // line 86
        echo "        </form>
    
";
    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        // line 91
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script> 
    (function(\$) {

      /* helper functions */
      function updateLink (id) {
        var url = '";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_show_user", array("id" => 1111)), "html", null, true);
        echo "';
        moreBtn.attr('href', url.replace(\"1111\", id));
      }
      function getCheckedRows () {
        var users = [];
        dataContainer.find('input:checkbox:checked').each(function() {
          users.push(\$(this).val());
        });
        return users.join(',');
      }
      function isSelected () {
        if (!getCheckedRows()) {
          alert('vous devez selectionner au moin un adhérant');
          return false;
        };
        return true;
      }
      function init(){
        pageInput.val('1');
        checkboxBtn.prop(\"checked\",false);
        jsFormUrl = '";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_users_ajax"), "html", null, true);
        echo "';
        profiles = form.find('div.myprofile > div');
      }
      function ajaxPost(action, callback) {
        form.addClass('working');
        searchModal.modal('hide');
        \$.ajax({ 
          type: \"POST\", 
          data: form.serialize(),
          url: jsFormUrl, 
          success: function(data){ 
            form.removeClass('working');
            if(callback) callback(data);
            if(!action){
              dataContainer.empty().hide().html(data).fadeIn();
              init();
            }
            else{
              init();
              ajaxPost();
            }
          },
          error:function(){
              form.removeClass('working');
          }
        });
        return false;
      }

      /* ajax dashboard*/
      var form = \$('#jsForm'),
          enableBtn = form.find('.js-enable'),
          dataContainer = form.find('#dataContainer');
          promoteBtn = form.find('.js-promote'),
          deleteBtn = form.find('#js-delete'),
          groupInput = form.find('#js-group'),
          groupSetBtnt = form.find('#js-group-set'),
          pageInput = form.find('#pagenumber'),
          perPageBtn = form.find('#js-perpage'),
          printBadgeBtn = form.find('#js-badge'),
          printTiquetBtn = form.find('#js-tiquet'),
          sortByInput = form.find('#sortBy'),
          sortDirInput = form.find('#sortDir'),
          sortBtn = form.find('.js-sort'),
          searchBtn = form.find('#js-search'),
          filterGroupBtn = form.find('#js-filter-group'),
          searchModal = form.find('#searchModal'),
          groupModal = form.find('#groupModal'),
          confirmationModal = form.find('#confirmationModal'),
          callModal = form.find('#callModal'),
          mailModal = form.find('#mailModal'),
          mailBtn = form.find('#js-mail'),
          smsBtn = form.find('#js-sms'),
          modal = form.find('#myModal'),
          navBtn = modal.find('button'),
          moreBtn = modal.find('#more'),
          profiles = [],
          dir = 'next',
          link = '',
          index=0,
          jsFormUrl = '',
          checkboxBtn = form.find(\"input:checkbox\");

      form.on('click', '.js-show', function(){
        var id = \$(this).data('id'),
            index = \$(this).data('index')-1,
            data = profiles[index];
        modal.find('.modal-body').html(data);
        modal.modal('show');
        updateLink(id);
      });

      navBtn.on('click', function(){
        var index = modal.find('.userinfo').data('index')-1,
            dir = \$(this).data('dir');
        index = (dir == 'next') ? index+1 : index-1;
        modal.find('.modal-body').hide().html(profiles[index]).fadeIn();
        updateLink(modal.find('.userinfo').data('id'));
      });
      /* keyboard navigation */
      \$(document).keydown(function(e){
        if (e.keyCode == 37) { 
          navBtn.filter(\"[data-dir=prev]\").trigger('click');
          return false;
        }
        else if(e.keyCode == 39){ 
          navBtn.filter(\"[data-dir=next]\").trigger('click');
          return false;
        }
      });



      /* print badge */    
      printBadgeBtn.on('click', function(){
          var url = '";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_pdf", array("users" => 1111)), "html", null, true);
        echo "',
              users = getCheckedRows();
          users = (users==='')? 'all':users; 
          url = url.replace(\"1111\", users);
          window.location.href = url;
      });
      printTiquetBtn.on('click', function(){
          var url = '";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_ticket_user", array("users" => 1111)), "html", null, true);
        echo "',
              users = getCheckedRows();
          users = (users==='')? 'all':users; 
          url = url.replace(\"1111\", users);
          window.location.href = url;
      });

      /* pagination */    
      form.on('click', '.js-page', function(){
          pageInput.val(\$(this).data('page'));
          ajaxPost();
      });
      /* advanced search */
      searchBtn.on('click', function () {
        ajaxPost();
      });

      /* enable or disable a user*/
      enableBtn.on('click', function(){
        var url = '";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_enable_users", array("etat" => 1111)), "html", null, true);
        echo "',
            etat = \$(this).data('action');
        if (!isSelected()) return false;
        jsFormUrl = url.replace(\"1111\", etat);
        ajaxPost('enable');
      });


      /* change sort order */
      sortBtn.on('click', function(){
        var th = \$(this).parent();
        th.addClass('sorted').toggleClass('asc').siblings().removeClass('sorted');
        sortByInput.val(\$(this).data('order'));
        if (th.hasClass('asc')) sortDirInput.val('ASC');
        else sortDirInput.val('DESC');
        ajaxPost();
        return false;
      });

      /* promote a user */
      promoteBtn.on('click', function(){
        var url='";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_promote_users", array("role" => 1111)), "html", null, true);
        echo "',
            etat = \$(this).data('action');
        if (!isSelected()) return false;
        jsFormUrl = url.replace(\"1111\", etat);
        ajaxPost('promote');
      });

      /* delete a user */
      deleteBtn.on('click', function(){
        // if (!isSelected() || !confirmation('voullez-vous vraiment supprimer les adhérants séléctionnées')) return false;
        jsFormUrl='";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_archive_set", array("stat" => 1)), "html", null, true);
        echo "';
        ajaxPost('delete');
        confirmationModal.modal('hide');
      });
      form.on('submit', ajaxPost);
      /* submit the form after loading the page*/
      init();
      ajaxPost();

      /* ajouter un groupe de recherche */
      filterGroupBtn.on('click', function(){
          jsFormUrl = '";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_group_filter"), "html", null, true);
        echo "';
          ajaxPost('filtergroup', function(data){
            if(data.name){
              groupInput.append('<option value=\"'+data.id+'\">'+data.name+'</option>');
              alert('Le groupe '+data.name+' a été ajouté avec succée');
            }
            else alert('This value should not be blank.');
            console.log(data);
          });

      });

      /* associer les adhérants sélectionnés à un groupe */
      groupSetBtnt.on('click', function(){
        groupModal.modal('hide');
        if (!isSelected()) return false;
          jsFormUrl = '";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_users_group"), "html", null, true);
        echo "';
          ajaxPost('groupset', function(data){
            alert('Les adhérants séléctionnées ont été ajouté au groupe '+data.name);
          });
      });

      /* send mail */
      mailBtn.on('click', function(){
        mailModal.find('.obj').parent().parent().show();
        mailModal.find('h4').html(\$(this).text());
        form.find('#logtype').val('mail');
        mailModal.modal('show');
      });
      smsBtn.on('click', function(){
        mailModal.find('.obj').parent().parent().hide();
        mailModal.find('h4').html(\$(this).text());
        form.find('#logtype').val('sms');
        mailModal.modal('show');
      });
      mailModal.find('#js-sendmail').on('click', function(){
        mailModal.modal('hide');
        jsFormUrl = '";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_mail"), "html", null, true);
        echo "';
        ajaxPost('mail');
      });

      /* call simulation */
      var feedback = callModal.find('.feedback').hide(),
          timerLabel = callModal.find('#timer').css('opacity', 0),
          userInput = feedback.find('#user'),
          seconds = 0, minutes = 0, hours = 0, myTimer;
      callModal.find('#hangup').on('click', function(){
          feedback.slideDown().prev().slideUp();
      });
      feedback.find('#sendFeedback').on('click', function(){
          callModal.modal('hide');
          jsFormUrl = '";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_users_log"), "html", null, true);
        echo "';
          ajaxPost('call');
          feedback.hide().prev().show();
          seconds = 0; minutes = 0; hours = 0;
          timerLabel.text('00:00');
          timerLabel.css('opacity', 0).prev().css('opacity', 1);
          clearTimeout(myTimer);
      });
    form.on('click', '.js-call', function(){
        form.find('#logtype').val('appel');
        callModal.find('.number').html('+212'+\$(this).data('call').substr(1));
        userInput.val(\$(this).data('id'));
        callModal.modal('show');
        setTimeout(function(){
          timer();
          timerLabel.css('opacity', 1).prev().css('opacity', 0);
        }, 3000);
        
    });

    function add() {
        seconds++;
        if (seconds >= 60) {
            seconds = 0;
            minutes++;
            if (minutes >= 60) {
                minutes = 0;
                hours++;
            }
        }
        time = (minutes ? (minutes > 9 ? minutes : \"0\" + minutes) : \"00\") + \":\" + (seconds > 9 ? seconds : \"0\" + seconds);
        timerLabel.text(time);
        timer();
    }
    function timer() {
        myTimer = setTimeout(add, 1000);
    }

    })(jQuery);
</script>
";
    }

    public function getTemplateName()
    {
        return "BenUserBundle:admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  530 => 331,  513 => 317,  489 => 296,  470 => 280,  456 => 269,  443 => 259,  419 => 238,  397 => 219,  387 => 212,  289 => 117,  266 => 97,  257 => 91,  254 => 90,  248 => 86,  246 => 85,  238 => 82,  226 => 74,  220 => 73,  217 => 72,  211 => 70,  203 => 68,  200 => 67,  197 => 66,  193 => 65,  182 => 56,  177 => 54,  174 => 53,  172 => 52,  166 => 51,  160 => 50,  154 => 49,  148 => 48,  144 => 47,  140 => 46,  135 => 44,  131 => 43,  128 => 42,  123 => 40,  119 => 39,  115 => 38,  111 => 37,  106 => 35,  101 => 34,  99 => 33,  93 => 32,  84 => 26,  72 => 17,  59 => 7,  52 => 6,  49 => 5,  41 => 3,  38 => 2,  11 => 1,);
    }
}
