<?php

/* BenAssociationBundle:event:calendar.html.twig */
class __TwigTemplate_948274983ccfe5e2b8a600f81b60789ead16095abe406c10324a4bffb65cd01e extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("event.meta.calendar"), "html", null, true);
        echo " | ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fullcalendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("qtip2/jquery.qtip.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "<div class=\"row\">
  <div class=\"col-xs-10\"><h2><span class=\"fui-calendar\"></span>  ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("event.meta.calendar"), "html", null, true);
        echo "</h2></div>
  <div class=\"col-xs-2\"><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_ftp"), "html", null, true);
        echo "\" class=\"btn btn-inverse btn-sm btn-block\"><span class=\"glyphicon glyphicon-share\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("event.action.ftp"), "html", null, true);
        echo "</a></div>
</div>

<div id=\"calendar\"></div>

<!-- Modal -->
<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
    <form id=\"postForm\" role=\"form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_create"), "html", null, true);
        echo "\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close fui-cross\" data-dismiss=\"modal\" aria-hidden=\"true\"></button>
        <h4 class=\"modal-title\"><span class=\"glyphicon glyphicon-calendar\"></span> ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("event.action.new"), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
      <input type=\"hidden\" name=\"json\" value=\"1\">
        <div class=\"datacontainer\">
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
          <div class=\"clearfix\"></div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"submit\" class=\"btn btn-primary btn-embossed\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.valide"), "html", null, true);
        echo "</button>
      </div>
      </form>
    </div>
  </div>
</div>
";
    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        // line 45
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script><!-- Full Calendar -->
";
        // line 49
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) != "en")) {
            // line 50
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("js/lang/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array())) . ".js")), "html", null, true);
            echo "\"></script><!-- Full Calendar -->
";
        }
        // line 52
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("qtip2/jquery.qtip.js"), "html", null, true);
        echo "\"></script>
<script>  
    (function(\$) {

      var modal = \$('#myModal'),
          workingArea= modal.find('.modal-content'),
          postForm = modal.find('#postForm'),
          inputFrom = postForm.find('#event_form_date_from'),
          inputTo = postForm.find('#event_form_date_to'),
          closeBtn = modal.find('.close');

          postForm.find('div.col-md-4').removeClass('col-md-4').addClass('col-md-6');
          inputTo.closest('.form-group').hide().prev().hide();

      postForm.on('submit', function(e) {
        e.preventDefault();
        ajaxPost(postForm);
        return false;
      });
      function update (event) {
        var url = '";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_update_date", array("id" => "@@")), "html", null, true);
        echo "',
            action = postForm.attr('action');
        url = url.replace(\"@@\", event.id);
        postForm.attr('action', url);
        inputFrom.val(event.start);
        inputTo.val(event.end);
        postForm.trigger('submit');
        postForm.attr('action', action);
      }
      function ajaxPost(form, action) {
        var dataContainer = form.find('.dataContainer');
        workingArea.addClass('working');
        \$.ajax({ 
          type: \"POST\", 
          data: form.serialize(),
          url: form.attr('action'), 
          success: function(data){ 
            workingArea.removeClass('working');
            if(data.id) {
              var url = '";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_show", array("id" => "@@")), "html", null, true);
        echo "';
              data.url = url.replace(\"@@\", data.id);
              calendar.fullCalendar('renderEvent',data, true);
              calendar.fullCalendar('unselect');
              closeBtn.trigger('click');
            }
            else dataContainer.empty().hide().html(data).fadeIn();
          },
          error:function(){
              workingArea.removeClass('working');
          }
        });
        return false;
      }

    /* calendar */
    var date = new Date(),
        d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear();
    
    var calendar = \$('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      selectable: true,
      selectHelper: true,
      editable: true,
      select: function(start, end, allDay) {
        inputFrom.val(start);
        inputTo.val(end);
        modal.modal('show');
      },
      eventRender: function(event, element) {
        element.qtip({    
            content: {    
                title: { text: event.title },
                text: '<b>";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("event.meta.date"), "html", null, true);
        echo ": </b>' + (moment(event.start).format('MM/DD/YYYY à hh:mm')) + '<br><b>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("event.form.type"), "html", null, true);
        echo ": </b>'+event.type+'<br><b>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("event.form.groups"), "html", null, true);
        echo ": </b>'+event.groups+'<br><b>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("event.form.description"), "html", null, true);
        echo ": </b>'+event.description+'<br /><a href=\"'+event.url+'\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.more"), "html", null, true);
        echo "</a>'     
            },
            style: { 
              classes: 'qtip-bootstrap', 
              tip: {corner: 'left center'}
            },         
            position: {
              my: 'bottom  center',
              at: 'top center',
              target: 'mouse',
              adjust: {
                  mouse: false
              }
            }
        });
      }
/*      eventMouseover: function( event, jsEvent, view ) { 
          var item = \$(this).css('z-index','9');
          if(item.find('.nube').length == 0){
              var info = '<div class=\"nube\"><h2>'+event.title+'</h2><ul class=\"list-unstyled\"> <li><strong>";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("event.form.type"), "html", null, true);
        echo " :</strong>'+event.type+'</li> <li><strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("event.form.groups"), "html", null, true);
        echo ": </strong>'+event.groups+'</li> <li><a href=\"'+event.url+'\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.more"), "html", null, true);
        echo "</a></li> </ul></div>';
              item.append(info);
          }
          item.find('.nube').stop(true,true).fadeIn();
      },
      eventMouseout: function( event, jsEvent, view ) { 
          var item = \$(this);
          item.css('z-index','1').find('.nube').stop(true,true).fadeOut(200);
      }*/,
      eventDrop: function(event, delta) {
          update(event);
      },
      eventResize: function(event, delta) {
          update(event);
      },
      events: [
      ";
        // line 165
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 166
            echo "        {
          id: ";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo ",
          title: '";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "',
          type: '";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "type", array()), "html", null, true);
            echo "',
          groups: '";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "getGroupList", array()), "html", null, true);
            echo "',
          description: hereDoc(function() {/*!\"";
            // line 171
            echo twig_escape_filter($this->env, strtr($this->getAttribute($context["entity"], "description", array()), array("
" => " ")), "html", null, true);
            echo "\"*/}),
          start: new Date('";
            // line 172
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datefrom", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "'),
          end: new Date('";
            // line 173
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateto", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "'),
          url: '";
            // line 174
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "'
        }";
            // line 175
            echo (($this->getAttribute($context["loop"], "last", array())) ? ("") : (","));
            echo "
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "      ]
    });

    })(jQuery);
</script>
";
    }

    public function getTemplateName()
    {
        return "BenAssociationBundle:event:calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 177,  346 => 175,  342 => 174,  338 => 173,  334 => 172,  329 => 171,  325 => 170,  321 => 169,  317 => 168,  313 => 167,  310 => 166,  293 => 165,  270 => 149,  240 => 130,  198 => 91,  176 => 72,  152 => 52,  146 => 50,  144 => 49,  140 => 48,  136 => 47,  132 => 46,  128 => 45,  125 => 44,  114 => 37,  106 => 32,  98 => 27,  92 => 24,  78 => 15,  74 => 14,  71 => 13,  68 => 12,  62 => 9,  58 => 8,  53 => 7,  50 => 6,  42 => 3,  39 => 2,  11 => 1,);
    }
}
