<?php

/* BenAssociationBundle:Cotisation:ajax_list.html.twig */
class __TwigTemplate_8691c208613cdcd2f76c4f5cbbb761850677e161fff37ee2d8d2b21df43e6bbc extends Twig_Template
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
        echo "    ";
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
            ";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "cotisationTable", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 6
                echo "              ";
                if ($this->getAttribute($context["item"], "visible", array())) {
                    echo "<td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "get", array(0 => $this->getAttribute($context["item"], "fieldName", array())), "method"), "html", null, true);
                    echo "</td>";
                }
                // line 7
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "            <td>
                <a class=\"btn btn-embossed btn-primary btn-xs\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cotisation_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.show"), "html", null, true);
            echo "\"><span class=\"fui-search\"></span></a>
                <a class=\"btn btn-embossed btn-info btn-xs\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cotisation_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 14
        $this->env->loadTemplate("BenAssociationBundle:Default:pagination.html.twig")->display($context);
        // line 15
        echo "
<script>   
(function(\$) {

    /* tooltip */
    \$('td a').tooltip();

})(jQuery);
</script>";
    }

    public function getTemplateName()
    {
        return "BenAssociationBundle:Cotisation:ajax_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 15,  70 => 14,  58 => 10,  52 => 9,  49 => 8,  43 => 7,  36 => 6,  32 => 5,  28 => 4,  24 => 2,  19 => 1,);
    }
}
