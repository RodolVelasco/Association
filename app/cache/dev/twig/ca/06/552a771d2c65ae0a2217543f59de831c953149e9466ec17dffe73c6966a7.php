<?php

/* BenAssociationBundle:event:ajax_list.html.twig */
class __TwigTemplate_ca06552a771d2c65ae0a2217543f59de831c953149e9466ec17dffe73c6966a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 2
            echo "        <tr>
            <td><label class=\"checkbox no-label\" for=\"checkbox-table-2\"><span class=\"icons\"><span class=\"first-icon fui-checkbox-unchecked\"></span><span class=\"second-icon fui-checkbox-checked\"></span></span>
            <span class=\"icons\"><span class=\"first-icon fui-checkbox-unchecked\"></span><span class=\"second-icon fui-checkbox-checked\"></span></span><input type=\"checkbox\" name=\"entities[]\" value=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\" id=\"checkbox-table-2\" data-toggle=\"checkbox\"></label></td>
            <td>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 6
            if ($this->getAttribute($context["entity"], "datefrom", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datefrom", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 7
            if ($this->getAttribute($context["entity"], "dateto", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateto", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "type", array()), "html", null, true);
            echo "</td>
            <td>
                <ul>";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "groups", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                echo "<li>";
                echo twig_escape_filter($this->env, $context["group"], "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</ul>
            </td>
            <td>
                <a class=\"btn btn-embossed btn-primary btn-xs\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.show"), "html", null, true);
            echo "\"><span class=\"fui-search\"></span></a>
                <a class=\"btn btn-embossed btn-info btn-xs\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.edit"), "html", null, true);
            echo "\"><span class=\"fui-new\"></span></a>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
";
        // line 19
        $this->env->loadTemplate("BenAssociationBundle:Default:pagination.html.twig")->display($context);
        // line 20
        echo "<script>   
(function(\$) {

    /* tooltip */
    \$('td a').tooltip();

})(jQuery);
</script>";
    }

    public function getTemplateName()
    {
        return "BenAssociationBundle:event:ajax_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 20,  88 => 19,  85 => 18,  73 => 14,  67 => 13,  52 => 10,  47 => 8,  41 => 7,  35 => 6,  31 => 5,  27 => 4,  23 => 2,  19 => 1,);
    }
}
