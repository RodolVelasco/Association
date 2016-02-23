<?php

/* BenAssociationBundle:Default:menu.html.twig */
class __TwigTemplate_984e7ad781f47c376a5c5415bf990251051b190d0a5cd8f4b5690a8171e98b8a extends Twig_Template
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
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        echo " 

";
        // line 3
        $context["dashboardMenu"] = array(0 => "Ben_association_homepage");
        // line 4
        $context["userMenu"] = array(0 => "ben_users", 1 => "ben_show_user", 2 => "ben_new_user", 3 => "etudiant_new", 4 => "ben_edit_user", 5 => "ben_import_csv");
        echo " 
";
        // line 5
        $context["groupMenu"] = array(0 => "group", 1 => "group_show", 2 => "group_new", 3 => "group_edit");
        // line 6
        $context["statusMenu"] = array(0 => "status", 1 => "status_show", 2 => "status_new", 3 => "status_edit");
        echo " 
";
        // line 7
        $context["roomMenu"] = array(0 => "room", 1 => "room_show", 2 => "room_new", 3 => "room_edit");
        echo " 
";
        // line 8
        $context["eventMenu"] = array(0 => "event", 1 => "event_show", 2 => "event_new", 3 => "event_edit", 4 => "event_calendar", 5 => "event_demo");
        echo " 
";
        // line 9
        $context["reservationMenu"] = array(0 => "reservation", 1 => "reservation_show", 2 => "reservation_new", 3 => "reservation_edit");
        echo " 
";
        // line 10
        $context["cotisationMenu"] = array(0 => "cotisation", 1 => "cotisation_show", 2 => "cotisation_new", 3 => "cotisation_edit");
        echo " 
";
        // line 11
        $context["hotelMenu"] = array(0 => "hotel", 1 => "hotel_show", 2 => "hotel_new", 3 => "hotel_edit");
        // line 12
        $context["configMenu"] = array(0 => "config", 1 => "config_update_fields");
        echo "  

<nav class=\"menu hidden-print\">
    <ul>
    ";
        // line 16
        if ($this->env->getExtension('security')->isGranted("ROLE_MANAGER")) {
            // line 17
            echo "        <li class=\"";
            if (twig_in_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["dashboardMenu"]) ? $context["dashboardMenu"] : $this->getContext($context, "dashboardMenu")))) {
                echo "current";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Ben_association_homepage"), "html", null, true);
            echo "\" ><span class=\"glyphicon glyphicon-dashboard block\"></span> <span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.menu.dashboard"), "html", null, true);
            echo "</span></a></li>
        <li class=\"";
            // line 18
            if (twig_in_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["userMenu"]) ? $context["userMenu"] : $this->getContext($context, "userMenu")))) {
                echo "current";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_users"), "html", null, true);
            echo "\" ><span class=\"fui-user block\"></span> <span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.menu.members"), "html", null, true);
            echo "</span></a></li>
        <li class=\"";
            // line 19
            if (twig_in_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["groupMenu"]) ? $context["groupMenu"] : $this->getContext($context, "groupMenu")))) {
                echo "current";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group"), "html", null, true);
            echo "\" ><span class=\"fui-myspace block\"></span> <span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.menu.groups"), "html", null, true);
            echo "</span></a></li>
        <li class=\"";
            // line 20
            if (twig_in_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["statusMenu"]) ? $context["statusMenu"] : $this->getContext($context, "statusMenu")))) {
                echo "current";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("status"), "html", null, true);
            echo "\" ><span class=\"glyphicon glyphicon-tags block\"></span> <span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.menu.status"), "html", null, true);
            echo "</span></a></li>
        <li class=\"";
            // line 21
            if (twig_in_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["cotisationMenu"]) ? $context["cotisationMenu"] : $this->getContext($context, "cotisationMenu")))) {
                echo "current";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cotisation"), "html", null, true);
            echo "\" ><span class=\"glyphicon glyphicon-usd block\"></span> <span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.menu.cotisation"), "html", null, true);
            echo "</span></a></li>
        
        <li class=\"";
            // line 23
            if (twig_in_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["eventMenu"]) ? $context["eventMenu"] : $this->getContext($context, "eventMenu")))) {
                echo "current";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event"), "html", null, true);
            echo "\" ><span class=\"fui-time block\"></span> <span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.menu.events"), "html", null, true);
            echo "</span></a></li>
";
            // line 27
            echo "        ";
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 28
                echo "        <li class=\"";
                if (twig_in_filter((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["configMenu"]) ? $context["configMenu"] : $this->getContext($context, "configMenu")))) {
                    echo "current";
                }
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("config"), "html", null, true);
                echo "\" ><span class=\"fui-gear block\"></span> <span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.menu.config"), "html", null, true);
                echo "</span></a></li>
        ";
            }
            // line 30
            echo "    ";
        }
        // line 31
        echo "        <li><a id=\"trigger-shelf\" href=\"#\" data-toggle=\"tooltip\" data-tooltip-style=\"light\" data-placement=\"right\" title=\"Collapse menu\"><span class=\"fui-arrow-left block\"></span> <span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.menu.collapse"), "html", null, true);
        echo "</span></a></li>
    </ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "BenAssociationBundle:Default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 31,  140 => 30,  128 => 28,  125 => 27,  115 => 23,  104 => 21,  94 => 20,  84 => 19,  74 => 18,  63 => 17,  61 => 16,  54 => 12,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  30 => 5,  26 => 4,  24 => 3,  19 => 1,);
    }
}
