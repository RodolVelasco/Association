<?php

/* BenAssociationBundle:Default:index.html.twig */
class __TwigTemplate_1d2e0032fb9b3b9e169e0e7d8be2e83a66061e8572a0007136acbcb35eb3f521 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.menu.dashboard"), "html", null, true);
        echo " | ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 8
        echo " \t";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/graph.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"><!-- Loading my css -->
 ";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "<h2 style=\"margin-bottom: 5px;\"><span class=\"glyphicon glyphicon-dashboard\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.menu.dashboard"), "html", null, true);
        echo "</h2>\t\t\t
<div class=\"row\">
\t<div class=\"col-md-4\">
\t\t<div class=\"box widget-body\">
\t        <header>
\t        \t<h3><span class=\"glyphicon glyphicon-user\"></span> Liste des commissions
\t        \t<i class=\"js-toggle pull-right glyphicon glyphicon-chevron-up glyphicon-chevron-down\"></i></h3>
\t        </header>
            <ul class=\"list-group hideme\">
              ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "              <li class=\"list-group-item\">
              <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["entity"], "id", array()), "perPage" => $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()))), "html", null, true);
            echo "\">
              ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "getName", array(), "method"), "html", null, true);
            echo "</a> <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["entity"], "getUsers", array(), "method")), "html", null, true);
            echo "</span>
              </li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </ul>
\t    </div>
";
        // line 46
        echo "\t</div>
\t<div class=\"col-md-8\">
\t<div class=\"row\">
\t\t
\t<div class=\"col-md-3 col-xs-6\">
\t<div class=\"stat-boxes widget-body\">
\t\t<a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_users"), "html", null, true);
        echo "\"><span class=\"fui-user ben-icone\"></span></a>
\t\t<h3 class=\"ticker--one\">";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "user", array()), "html", null, true);
        echo "</h3>
\t\t<i>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.menu.members"), "html", null, true);
        echo "</i>
\t\t<div class=\"clearfix\"></div>\t\t
\t</div>
\t</div>
\t<div class=\"col-md-3 col-xs-6\">
\t\t<div class=\"stat-boxes widget-body\">
\t\t\t<a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group"), "html", null, true);
        echo "\"><span class=\"fui-myspace ben-icone\"></span></a>
\t\t\t<h3 class=\"ticker--one\">";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "group", array()), "html", null, true);
        echo "</h3>
\t\t\t<i>";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.menu.groups"), "html", null, true);
        echo "</i>
\t\t\t<div class=\"clearfix\"></div>\t\t
\t\t</div>
\t</div>
\t<div class=\"col-md-3 col-xs-6\">
\t\t<div class=\"stat-boxes widget-body\">
\t\t\t<a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event"), "html", null, true);
        echo "\"><span class=\"fui-time ben-icone\"></span></a>
\t\t\t<h3 class=\"ticker--one\">";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "event", array()), "html", null, true);
        echo "</h3>
\t\t\t<i>";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.menu.events"), "html", null, true);
        echo "</i>
\t\t\t<div class=\"clearfix\"></div>\t\t
\t\t</div>
\t</div>
\t<div class=\"col-md-3 col-xs-6\">
\t\t<div class=\"stat-boxes widget-body\">
\t\t\t<a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cotisation"), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-usd ben-icone\"></span></a>
\t\t\t<h3 class=\"ticker--one\">";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "cotisation", array()), "html", null, true);
        echo "</h3>
\t\t\t<i>";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.menu.cotisation"), "html", null, true);
        echo "</i>
\t\t\t<div class=\"clearfix\"></div>\t\t
\t\t</div>
\t</div>
\t<div class=\"col-md-3 col-xs-6\">
\t\t<div class=\"stat-boxes widget-body\">
\t\t\t<a href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("status"), "html", null, true);
        echo "\"><span class=\"fui-tag ben-icone\"></span></a>
\t\t\t<h3 class=\"ticker--one\">";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "status", array()), "html", null, true);
        echo "</h3>
\t\t\t<i>";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.menu.status"), "html", null, true);
        echo "</i>
\t\t\t<div class=\"clearfix\"></div>\t\t
\t\t</div>
\t</div>
\t<div class=\"col-md-3 col-xs-6\">
\t\t<div class=\"stat-boxes widget-body\">
\t\t\t<a href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_message_inbox"), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-envelope ben-icone\"></span></a>
\t\t\t<h3 class=\"ticker--one\">";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('fos_message')->getNbUnread(), "html", null, true);
        echo "</h3>
\t\t\t<i>";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.menu.messages"), "html", null, true);
        echo "</i>
\t\t\t<div class=\"clearfix\"></div>\t\t
\t\t</div>
\t</div>
\t</div>
\t</div>
\t<div class=\"col-md-12\">
\t\t<div class=\"box widget-body\">
\t        <header>
\t        \t<h3><span class=\"glyphicon glyphicon-globe\"></span> ";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.meta.map"), "html", null, true);
        echo "
\t        \t<i class=\"js-toggle pull-right glyphicon glyphicon-chevron-up\"></i></h3>
\t        </header>
\t\t\t<div class=\"map-warper\">
\t\t\t\t<div id=\"js-map\"></div> 
\t\t\t</div>
\t    </div>
\t</div>
</div>
<div class=\"col-md-6\">
\t<!-- Graph HTML -->
<div id=\"graph-wrapper\">
\t<div id=\"statChartFlotLineA\"></div>
</div>
<!-- end Graph HTML -->
</div>


<div class=\"clearfix\"></div>
";
    }

    // line 124
    public function block_javascripts($context, array $blocks = array())
    {
        // line 125
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/flot/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/flot/jquery.flot.pie.min.js"), "html", null, true);
        echo "\"></script>


\t<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false\"></script> 


<script> 
    (function(\$) {

 
// // Bars
// \$.plot(\$('#graph-bars'), graphData, {
//     series: {
//         bars: {
//             show: true,
//             barWidth: .9,
//             align: 'center'
//         },
//         shadowSize: 0
//     },
//     grid: {
//         color: '#646464',
//         borderColor: 'transparent',
//         borderWidth: 20,
//         hoverable: true
//     },
//     xaxis: {
//         tickColor: 'transparent',
//         tickDecimals: 2
//     },
//     yaxis: {
//         tickSize: 1000
//     }
// });

// \$('#graph-bars').hide();
 
// \$('#lines').on('click', function (e) {
//     \$('#bars').removeClass('active');
//     \$('#graph-bars').fadeOut();
//     \$(this).addClass('active');
//     \$('#graph-lines').fadeIn();
//     e.preventDefault();
// });
 
// \$('#bars').on('click', function (e) {
//     \$('#lines').removeClass('active');
//     \$('#graph-lines').fadeOut();
//     \$(this).addClass('active');
//     \$('#graph-bars').fadeIn().removeClass('hidden');
//     e.preventDefault();
// });

// function showTooltip(x, y, contents) {
//     \$('<div id=\"tooltip\">' + contents + '</div>').css({
//         top: y - 16,
//         left: x + 20
//     }).appendTo('body').fadeIn();
// }
 
// var previousPoint = null;
 
// \$('#graph-lines, #graph-bars').bind('plothover', function (event, pos, item) {
//     if (item) {
//         if (previousPoint != item.dataIndex) {
//             previousPoint = item.dataIndex;
//             \$('#tooltip').remove();
//             var x = item.datapoint[0],
//                 y = item.datapoint[1];
//                 showTooltip(item.pageX, item.pageY, y + ' visitors at ' + x + '.00h');
//         }
//     } else {
//         \$('#tooltip').remove();
//         previousPoint = null;
//     }
// });

    var styles = [  
\t  //       {  
\t\t\t//     featureType: 'poi',  
\t\t\t//     elementType: 'geometry',  
\t\t\t//     stylers: [  
\t\t\t//         { hue: '#f9e0b7' },  
\t\t\t//         { lightness: 30 }  
\t\t\t//     ]  
\t\t\t// },
\t\t\t// {  
\t\t\t//     featureType: 'road',  
\t\t\t//     elementType: 'geometry',  
\t\t\t//     stylers: [  
\t\t\t//         { hue: '#d5c18c' },  
\t\t\t//         { lightness: 14 }  
\t\t\t//     ]  
\t\t\t// },
\t\t\t// {  
\t\t\t//     featureType: 'road.local',  
\t\t\t//     elementType: 'all',  
\t\t\t//     stylers: [  
\t\t\t//         { hue: '#ffd7a6' },  
\t\t\t//         { saturation: 100 },  
\t\t\t//         { lightness: -12 }  
\t\t\t//     ]  
\t\t\t// }  
\t    ],
\t    options = {  
\t\t    mapTypeControlOptions: {  
\t\t        mapTypeIds: ['Styled']  
\t\t    },  
\t        center: new google.maps.LatLng(";
        // line 236
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_map_lat", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_map_lng", array()), "html", null, true);
        echo "),  
\t        zoom: 16,  
\t        disableDefaultUI: true,   
\t        mapTypeId: 'Styled'  
    \t},
    \tmapContainer = document.getElementById('js-map'); 
    \tmap = new google.maps.Map(mapContainer, options),
    \tstyledMapType = new google.maps.StyledMapType(styles, { name: 'Styled' });  
    \tmap.mapTypes.set('Styled', styledMapType); 
    \tmarker = new google.maps.Marker({
\t\t    position: options.center,
\t\t    map: map,
\t\t    animation: google.maps.Animation.DROP
\t\t});

    })(jQuery);
</script>
";
    }

    public function getTemplateName()
    {
        return "BenAssociationBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 236,  255 => 128,  251 => 127,  246 => 125,  243 => 124,  219 => 103,  207 => 94,  203 => 93,  199 => 92,  190 => 86,  186 => 85,  182 => 84,  173 => 78,  169 => 77,  165 => 76,  156 => 70,  152 => 69,  148 => 68,  139 => 62,  135 => 61,  131 => 60,  122 => 54,  118 => 53,  114 => 52,  106 => 46,  102 => 28,  91 => 25,  87 => 24,  84 => 23,  80 => 22,  67 => 13,  64 => 12,  58 => 9,  53 => 8,  50 => 7,  42 => 3,  39 => 2,  11 => 1,);
    }
}
