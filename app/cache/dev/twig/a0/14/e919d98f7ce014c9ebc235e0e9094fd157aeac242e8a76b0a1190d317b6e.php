<?php

/* BenAssociationBundle:event:index.html.twig */
class __TwigTemplate_a014e919d98f7ce014c9ebc235e0e9094fd157aeac242e8a76b0a1190d317b6e extends Twig_Template
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
            'stylesheet' => array($this, 'block_stylesheet'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("event.title"), "html", null, true);
        echo " | ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 6
        echo "   ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "   
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/daterangepicker-bs3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"><!-- Loading my css -->
    ";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "
<h2><span class=\"fui-time\"></span>  ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("event.title"), "html", null, true);
        echo "</h2>
      <form id=\"jsForm\" role=\"form\" method=\"post\" action=\"\">
        <input id=\"pagenumber\" type=\"hidden\" name=\"searchParam[page]\" value=\"1\">     
          <div class=\"row hidden-print\">
              <div class=\"col-md-5 col-xs-6\">
                  <div class=\"form-group\">
                     <div class=\"input-group\">                                     
                        <input type=\"text\" name=\"searchParam[keyword]\" class=\"form-control\" placeholder=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.search"), "html", null, true);
        echo "\">
                       <span class=\"input-group-btn\">
                             <button type=\"submit\" class=\"btn\"><span class=\"fui-search\"></span></button>
                         </span>
                     </div>
                  </div>
              </div>    
            <div class=\"col-lg-7 col-xs-6\">
              <div class=\"btn-group pull-right\">              
                <button class=\"btn btn-primary\" href=\"#\" data-toggle=\"modal\" data-target=\"#searchModal\"><span class=\"fui-search\"></span> ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.advanced"), "html", null, true);
        echo "</button>
                <button class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
                  <span class=\"caret\"></span>
                </button>
                <span class=\"dropdown-arrow dropdown-arrow-inverse\"></span>
                <ul class=\"dropdown-menu dropdown-inverse\">
                      <li><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_calendar"), "html", null, true);
        echo "\"><span class=\"fui-calendar\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.menu.calendar"), "html", null, true);
        echo "</a></li>
                      <li><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_ftp"), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-share\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("event.action.ftp"), "html", null, true);
        echo "</a></li>
                      <li class=\"divider\"></li>
                      <li><a href=\"#\" id=\"js-delete\"><span class=\"fui-trash\"></span> ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.delete"), "html", null, true);
        echo "</a></li>
                </ul>
              </div>
            </div>
        </div><!-- /.row --> 
        
        <table class=\"table table-hover table-bordered\">
        <thead>
            <tr>
                <th><label class=\"checkbox no-label toggle-all\" for=\"checkbox-table-1\"><span class=\"icons\"><span class=\"first-icon fui-checkbox-unchecked\"></span><span class=\"second-icon fui-checkbox-checked\"></span></span><span class=\"icons\"><span class=\"first-icon fui-checkbox-unchecked\"></span><span class=\"second-icon fui-checkbox-checked\"></span></span><input type=\"checkbox\" value=\"\" id=\"checkbox-table-1\" data-toggle=\"checkbox\"></label></th>
                <th>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("event.meta.name"), "html", null, true);
        echo "</th>
                <th>";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("cotisation.form.date.from"), "html", null, true);
        echo "</th>
                <th>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("cotisation.form.date.to"), "html", null, true);
        echo "</th>
                <th>";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("event.form.type"), "html", null, true);
        echo "</th>
                <th>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("event.form.groups"), "html", null, true);
        echo "</th>
                <th>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.meta.actions"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody id=\"dataContainer\"></tbody>
        </table>
        <div class=\"caption\">
          <strong>";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.meta.total"), "html", null, true);
        echo ":</strong> <em>";
        echo twig_escape_filter($this->env, (isset($context["entitiesLength"]) ? $context["entitiesLength"] : $this->getContext($context, "entitiesLength")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("event.meta.name"), "html", null, true);
        echo "</em>
        </div>

        <!-- Modal -->
        <div class=\"modal fade\" id=\"searchModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
          <div class=\"modal-dialog\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" id=\"closeModal\" class=\"close fui-cross\" data-dismiss=\"modal\" aria-hidden=\"true\"></button>
                <h4 class=\"modal-title\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.advanced"), "html", null, true);
        echo "</h4>
              </div>
              <div class=\"modal-body\">  
                <div class=\"form-group\">
                    <label class=\"col-md-5 control-label\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("cotisation.form.periode"), "html", null, true);
        echo "</label>
                    <div class=\"form-group col-md-7\">
                        <input id=\"rangepicker\" type=\"text\" class=\"form-control\" name=\"searchParam[date]\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-5 control-label\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.action.filter"), "html", null, true);
        echo "</label>
                    <div class=\"col-md-7\">
                      <select id=\"js-group\" name=\"searchParam[group]\" class=\"primary select-block\">
                        <option value=\"0\">Filtrer par groupe</option>
                        ";
        // line 81
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 82
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "name", array()), "html", null, true);
            echo "</option>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                      </select>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-5 control-label\">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.meta.perpage"), "html", null, true);
        echo "</label>
                    <div class=\"col-md-7\">
                       <select id=\"js-perpage\" name=\"searchParam[perPage]\" class=\"select-block primary\">
                        <option value=\"10\" ";
        // line 91
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == 10)) {
            echo "selected";
        }
        echo ">10</option>
                        <option value=\"20\" ";
        // line 92
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == 20)) {
            echo "selected";
        }
        echo ">20</option>
                        <option value=\"50\" ";
        // line 93
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == 50)) {
            echo "selected";
        }
        echo ">50</option>
                        <option value=\"100\" ";
        // line 94
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == 100)) {
            echo "selected";
        }
        echo ">100</option>
                      </select>
                    </div>
                </div>
                <div class=\"clearfix\"></div>
              </div>
              <div class=\"modal-footer\">
                <button type=\"submit\" class=\"btn btn-primary btn-embossed\">";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.search"), "html", null, true);
        echo "</button>
              </div>
            </div>
          </div>
        </div>
</form>

   
";
    }

    // line 111
    public function block_javascripts($context, array $blocks = array())
    {
        // line 112
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<script> 
    (function(\$) {

      /* helper functions */
      function getCheckedRows () {
        var entities = [];
        dataContainer.find('input:checkbox:checked').each(function() {
          entities.push(\$(this).val());
        });
        return entities.join(',');
      }
      function init(){
        groupBtn.val('0');
        pageInput.val('1');
        checkboxBtn.prop(\"checked\",false);
        jsFormUrl = '";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_event_ajax"), "html", null, true);
        echo "';
      }
      function ajaxPost(action) {
        form.addClass('working');
        searchModal.modal('hide');
        \$.ajax({ 
          type: \"POST\", 
          data: form.serialize(),
          url: jsFormUrl, 
          success: function(data){ 
            form.removeClass('working');
            init();
            if(!action){
              dataContainer.empty().hide().html(data).fadeIn();
            }else ajaxPost();
          },
          error:function(){
              form.removeClass('working');
          }
        });
        return false;
      }

      /* ajax dashboard*/
      var form = \$('#jsForm'),
          dataContainer = form.find('#dataContainer');
          deleteBtn = form.find('#js-delete'),
          groupBtn = form.find('#js-group'),
          pageInput = form.find('#pagenumber'),
          perPageBtn = form.find('#js-perpage'),
          jsFormUrl = '',
          checkboxBtn = form.find(\"input:checkbox\"),
          searchModal = form.find('#searchModal');


      /* pagination */    
      form.on('click', '.js-page', function(){
          pageInput.val(\$(this).data('page'));
          ajaxPost();
      });
      
      deleteBtn.on('click', function(){
        jsFormUrl='";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_remove_events"), "html", null, true);
        echo "';
        ajaxPost('delete');
      });
      form.on('submit', function(){
        ajaxPost();
        return false;
      });

      /* submit the form after loading the page*/
      init();
      ajaxPost();

      /* daterangepicker */
     \$('#rangepicker').daterangepicker({format: 'YYYY/MM/DD'});
    })(jQuery);
</script>
";
    }

    public function getTemplateName()
    {
        return "BenAssociationBundle:event:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 172,  295 => 130,  276 => 114,  272 => 113,  268 => 112,  265 => 111,  252 => 101,  240 => 94,  234 => 93,  228 => 92,  222 => 91,  216 => 88,  210 => 84,  199 => 82,  195 => 81,  188 => 77,  179 => 71,  172 => 67,  156 => 58,  147 => 52,  143 => 51,  139 => 50,  135 => 49,  131 => 48,  127 => 47,  114 => 37,  107 => 35,  101 => 34,  92 => 28,  80 => 19,  70 => 12,  67 => 11,  64 => 10,  58 => 7,  53 => 6,  50 => 5,  42 => 3,  39 => 2,  11 => 1,);
    }
}
