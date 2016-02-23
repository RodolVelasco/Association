<?php

/* BenAssociationBundle:Default:flashes.html.twig */
class __TwigTemplate_fe2c366b1aca5baf9e580cd8636f50d15156468992ab0352b775ef216e07234f extends Twig_Template
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
        echo "<section class=\"flashbag\">
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["flashMessages"]) {
            // line 3
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["flashMessages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 4
                echo "    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo " fade in\">
    <button type=\"button\" class=\"close fui-cross\" data-dismiss=\"alert\"></button>
        ";
                // line 6
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["flashMessage"], array(), "flashes"), "html", null, true);
                echo " 
    </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashMessages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
    ";
        // line 11
        if (array_key_exists("daysleft", $context)) {
            // line 12
            echo "    \t";
            if ($this->getAttribute((isset($context["daysleft"]) ? $context["daysleft"] : $this->getContext($context, "daysleft")), "days", array())) {
                // line 13
                echo "\t\t\t";
                if (($this->getAttribute((isset($context["daysleft"]) ? $context["daysleft"] : $this->getContext($context, "daysleft")), "days", array()) < 0)) {
                    // line 14
                    echo "\t\t    <div class=\"alert alert-error fade in\">
\t\t    <button type=\"button\" class=\"close fui-cross\" data-dismiss=\"alert\"></button>
\t\t    \t<p>Cet adhérent est en retard de ";
                    // line 16
                    echo twig_escape_filter($this->env, abs($this->getAttribute((isset($context["daysleft"]) ? $context["daysleft"] : $this->getContext($context, "daysleft")), "days", array())), "html", null, true);
                    echo "  jours depuis le ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["daysleft"]) ? $context["daysleft"] : $this->getContext($context, "daysleft")), "date", array()), "html", null, true);
                    echo ", envoyer lui une alerte par <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_mail_alert", array("id" => $this->getAttribute((isset($context["daysleft"]) ? $context["daysleft"] : $this->getContext($context, "daysleft")), "user", array()))), "html", null, true);
                    echo "\">mail</a>, ou imprimer la <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_print_alert", array("id" => $this->getAttribute((isset($context["daysleft"]) ? $context["daysleft"] : $this->getContext($context, "daysleft")), "user", array()))), "html", null, true);
                    echo "\">lettre</a> pour envoie postal
\t\t    \t</p>
\t\t    </div>
\t\t\t";
                } else {
                    // line 19
                    echo " 
\t\t    <div class=\"alert alert-info fade in\">
\t\t    <button type=\"button\" class=\"close fui-cross\" data-dismiss=\"alert\"></button>
\t\t    \tAdhérent à jour, ";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["daysleft"]) ? $context["daysleft"] : $this->getContext($context, "daysleft")), "days", array()), "html", null, true);
                    echo "  jours restants (depuis le ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["daysleft"]) ? $context["daysleft"] : $this->getContext($context, "daysleft")), "date", array()), "html", null, true);
                    echo ")
\t\t    </div>
\t\t\t";
                }
                // line 25
                echo "\t    ";
            } else {
                // line 26
                echo "\t\t    <div class=\"alert alert-error fade in\">
\t\t    <button type=\"button\" class=\"close fui-cross\" data-dismiss=\"alert\"></button>
\t\t    \t<p>Cet adhérent n'est pas à jour</p>
\t\t    </div>
\t\t";
            }
            // line 31
            echo "    ";
        }
        // line 32
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "BenAssociationBundle:Default:flashes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 32,  101 => 31,  94 => 26,  91 => 25,  83 => 22,  78 => 19,  65 => 16,  61 => 14,  58 => 13,  55 => 12,  53 => 11,  50 => 10,  36 => 6,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
