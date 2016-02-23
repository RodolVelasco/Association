<?php

/* BenAssociationBundle:Default:pagination.html.twig */
class __TwigTemplate_161c9a66791095f51f26b0784c26b771cc17e5b274801a8b80745e57b578fe71 extends Twig_Template
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
        // line 24
        echo "
";
        // line 25
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) > 1)) {
            // line 26
            echo "<tr class=\"mypagination hide-print\">
    <td colspan=\"10\">
      <div class=\"text-center\">
        <div class=\"pagination \">
            <ul>
              ";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 32
                echo "              <li";
                if ($this->getAttribute($context["p"], "is_current", array())) {
                    echo " class=\"active\"";
                }
                echo ">
                <a href=\"#\" class=\"js-page\" data-page=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "page_number", array()), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "label", array()), "html", null, true);
                echo "</a>
              </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "            </ul>
        </div>
      </div>
    </td>
</tr>
";
        }
    }

    public function getTemplateName()
    {
        return "BenAssociationBundle:Default:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 36,  42 => 33,  35 => 32,  31 => 31,  24 => 26,  22 => 25,  19 => 24,);
    }
}
