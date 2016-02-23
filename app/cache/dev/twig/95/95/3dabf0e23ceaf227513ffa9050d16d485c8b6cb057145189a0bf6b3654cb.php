<?php

/* BenUserBundle:admin:ajax_list.html.twig */
class __TwigTemplate_95953dabf0e23ceaf227513ffa9050d16d485c8b6cb057145189a0bf6b3654cb extends Twig_Template
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
            // line 2
            echo "    <tr>
        <td><label class=\"checkbox no-label\" for=\"checkbox-table-2\"><span class=\"icons\"><span class=\"first-icon fui-checkbox-unchecked\"></span><span class=\"second-icon fui-checkbox-checked\"></span></span>
        <span class=\"icons\"><span class=\"first-icon fui-checkbox-unchecked\"></span><span class=\"second-icon fui-checkbox-checked\"></span></span><input type=\"checkbox\" name=\"users[]\" value=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\" id=\"checkbox-table-2\" data-toggle=\"checkbox\"></label></td>

        ";
            // line 6
            if ($this->getAttribute($this->getAttribute($context["entity"], "profile", array()), "isArchived", array())) {
                // line 7
                echo "          <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "profile", array()), "familyName", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "profile", array()), "firstName", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "profile", array()), "cin", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "profile", array()), "cause", array()), "html", null, true);
                echo "</td>
        ";
            } else {
                // line 13
                echo "        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "userTable", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 14
                    echo "          ";
                    if ($this->getAttribute($context["item"], "visible", array())) {
                        echo "<td>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "get", array(0 => $this->getAttribute($context["item"], "fieldName", array())), "method"), "html", null, true);
                        echo "</td>";
                    }
                    // line 15
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "        ";
            }
            // line 17
            echo "        <td>
        <div class=\"myprofile hide\"> 
        <div class=\"row\">
          <div class=\"col-xs-4\"><img class=\"myavatar img-responsive\" src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "profile", array()), "image", array()), "getwebpath", array())), "html", null, true);
            echo "\"></div>
          <ul class=\"list-unstyled col-xs-8 userinfo\" data-index=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\">
              <li><strong>";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.username"), "html", null, true);
            echo " :</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</li>
              <li><strong>";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.family.name"), "html", null, true);
            echo " :</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "profile", array()), "familyName", array()), "html", null, true);
            echo "</li>
              <li><strong>";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.first.name"), "html", null, true);
            echo " :</strong>  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "profile", array()), "firstName", array()), "html", null, true);
            echo "</li>
              <li><strong>";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.birthday"), "html", null, true);
            echo " :</strong>  ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "profile", array()), "birthday", array()), "d/m/Y"), "html", null, true);
            echo "</li>
              <li><strong>";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.gender"), "html", null, true);
            echo " :</strong>  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "profile", array()), "gender", array()), "html", null, true);
            echo "</li>
              <li><strong>";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.address"), "html", null, true);
            echo " :</strong>  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "profile", array()), "address", array()), "html", null, true);
            echo "</li>
              <li><strong>";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.city"), "html", null, true);
            echo " :</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "profile", array()), "city", array()), "html", null, true);
            echo "</li>
              <li><strong>";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.description"), "html", null, true);
            echo " :</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "profile", array()), "description", array()), "html", null, true);
            echo "</li>
            </ul>
        </div>
        </div>

        <div class=\"btn-group pull-left\">              
          <button class=\"btn btn-default dropdown-toggle btn-xs\" data-toggle=\"dropdown\"><span class=\"fui-gear\"></span>
            <span class=\"caret\"></span>
          </button>
          <span class=\"dropdown-arrow dropdown-arrow-inverse\"></span>
          <ul class=\"dropdown-menu dropdown-inverse\">
            <li><a class=\"js-show\" data-index=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\" href=\"#\"><span class=\"glyphicon glyphicon-search\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.show"), "html", null, true);
            echo "</a></li>
            <li><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_edit_user", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.edit"), "html", null, true);
            echo "</a></li>
            <li><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("avancement_new", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-user\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("status.action.new"), "html", null, true);
            echo "</a></li>
            <li><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cotisation_new", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-check\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("cotisation.meta.name"), "html", null, true);
            echo "</a></li>
            <li><a class=\"js-call\" href=\"#\" data-id=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\" data-call=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "profile", array()), "tel", array()), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-earphone\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.call"), "html", null, true);
            echo "</a></li>
          </ul>
        </div>

        </td>
    </tr>
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
        // line 51
        echo "                
";
        // line 52
        $this->env->loadTemplate("BenAssociationBundle:Default:pagination.html.twig")->display($context);
        // line 53
        echo "
<script>   
(function(\$) {

    /* tooltip */
    \$('td a').tooltip();

})(jQuery);
</script>
";
    }

    public function getTemplateName()
    {
        return "BenUserBundle:admin:ajax_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 53,  217 => 52,  214 => 51,  189 => 44,  183 => 43,  177 => 42,  171 => 41,  163 => 40,  147 => 29,  141 => 28,  135 => 27,  129 => 26,  123 => 25,  117 => 24,  111 => 23,  105 => 22,  99 => 21,  95 => 20,  90 => 17,  87 => 16,  81 => 15,  74 => 14,  69 => 13,  64 => 11,  60 => 10,  56 => 9,  52 => 8,  47 => 7,  45 => 6,  40 => 4,  36 => 2,  19 => 1,);
    }
}
