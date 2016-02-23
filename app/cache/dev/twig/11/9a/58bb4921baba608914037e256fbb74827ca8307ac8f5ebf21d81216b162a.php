<?php

/* BenUserBundle:admin:show.html.twig */
class __TwigTemplate_119a58bb4921baba608914037e256fbb74827ca8307ac8f5ebf21d81216b162a extends Twig_Template
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
        echo "Adherant | ";
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
    <style type=\"text/css\"> 
    .mybadge {
      background: ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "badge_bgcolor", array()), "html", null, true);
        echo ";
      color: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "badge_color", array()), "html", null, true);
        echo ";
      }
      .mybadge .footer{ 
        color: ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "badge_footer_color", array()), "html", null, true);
        echo ";
        background: ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "badge_footer_bgcolor", array()), "html", null, true);
        echo ";
      }
      ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_carte_css", array()), "html", null, true);
        echo " 

    </style>
 ";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "  <div class=\"row\">
    <div class=\"col-xs-6 hidden-print\"><h2><span class=\"fui-user\"></span> ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profile", array()), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profile", array()), "familyName", array()), "html", null, true);
        echo " </h2></div>

     ";
        // line 26
        if ($this->env->getExtension('security')->isGranted("ROLE_MANAGER")) {
            echo " 
     <form id=\"deleteForm\" action=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_delete_user", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\" method=\"post\">
        ";
            // line 28
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
            echo "
    </form>
    <div class=\"col-xs-6\">
          <div class=\"btn-group pull-right hidden-print\">              
      <button class=\"btn btn-primary \"><span class=\"fui-gear\"></span> ";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.select"), "html", null, true);
            echo "</button>
      <button class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
      </button>
      <span class=\"dropdown-arrow dropdown-arrow-inverse\"></span>
      <ul class=\"dropdown-menu dropdown-inverse\">
        <li><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_edit_user", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\"><span class=\"fui-new\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.edit"), "html", null, true);
            echo "</a></li>
        <li><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("avancement_new", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-plus\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("status.action.new"), "html", null, true);
            echo "</a></li>
        <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cotisation_new", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-plus\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("cotisation.action.new"), "html", null, true);
            echo "</a></li>
        <li><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_pdf", array("users" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\"><span class=\"fui-credit-card\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.action.carte.print"), "html", null, true);
            echo "</a></li>
        <li><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_ticket_user", array("users" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\"><span class=\"fui-tag\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.action.tiquet"), "html", null, true);
            echo "</a></li>
        <li><a id=\"btnPrint\" href=\"#\"><span class=\"glyphicon glyphicon-print\"></span> ";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.action.print"), "html", null, true);
            echo "</a></li>
        ";
            // line 45
            echo "        ";
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 46
                echo "        <li class=\"divider\"></li>
        <li><a id=\"js-delete\"  data-id=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profile", array()), "fullName", array()), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_new_user", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-trash\"></span> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.delete"), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 49
            echo "      </ul>
    </div>
    </div>
    ";
        }
        // line 53
        echo "  </div>
  <h2 class=\"visible-print text-center\">Fiche adhérant</h2>
<div class=\"row\">
    <div class=\"col-md-4\">
    ";
        // line 57
        if ($this->env->getExtension('security')->isGranted("ROLE_MANAGER")) {
            echo " 
      <div class=\"box mybadge hidden-print\">
        <img class=\"pull-left pic\" src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profile", array()), "image", array()), "getwebpath", array())), "html", null, true);
            echo "\"/>
        <img class=\"pull-right logo\" src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_logo", array())), "html", null, true);
            echo "\"/>
        <h2>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_name", array()), "html", null, true);
            echo "</h2>
        <ul class=\"list-unstyled\">
            <li><strong>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profile", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profile", array()), "familyName", array()), "html", null, true);
            echo "</strong></li>
            <li>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
            echo "</li>
        </ul>
        <div class=\"footer label-primary\">
           <span>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_slogan", array()), "html", null, true);
            echo "</span>
            <span class=\"pull-right\">";
            // line 68
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
            echo "</span>
        </div>
      </div>
      <div class=\"box hidden-print\">
        <div class=\"mybadge\">
          <div class=\"js-barcode\" data-id=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profile", array()), "barcode", array()), "html", null, true);
            echo "\"></div>
          <div class=\"footer label-primary\">
              <span>Date d'inscription: ";
            // line 75
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "created", array()), "Y-m-d"), "html", null, true);
            echo "</span>
          </div>
          <div class=\"clearfix\"></div>
        </div>
      </div>
      ";
        }
        // line 81
        echo "      <div class=\"box\">
          <header>
            <h3><span class=\"glyphicon glyphicon-file\"></span> ";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.meta.general"), "html", null, true);
        echo "</h3>
          </header>
          <ul class=\"list-group\">
              <li class=\"list-group-item\"><strong>";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.username"), "html", null, true);
        echo " :</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username", array()), "html", null, true);
        echo "</li>
              <li class=\"list-group-item\"><strong>";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.email"), "html", null, true);
        echo " :</strong> <a href=\"mailto:";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "</a></li>
              <li class=\"list-group-item\"><strong>";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.enabled"), "html", null, true);
        echo " :</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()), "html", null, true);
        echo "</li>
              <li class=\"list-group-item\"><strong>";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.created"), "html", null, true);
        echo " : </strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('time_ago_extension')->timeAgoInWordsFilter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "created", array())), "html", null, true);
        echo "</li>
              ";
        // line 90
        if ( !(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastLogin", array()))) {
            // line 91
            echo "              <li class=\"list-group-item\"><strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.lastlogin"), "html", null, true);
            echo " : </strong> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('time_ago_extension')->timeAgoInWordsFilter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastLogin", array())), "html", null, true);
            echo "</li>
              ";
        }
        // line 93
        echo "              <li class=\"list-group-item\"><strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.role"), "html", null, true);
        echo " : </strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "role", array()), "html", null, true);
        echo "</li>
              <li class=\"list-group-item\"><strong>";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.groups"), "html", null, true);
        echo " : </strong>
                <ul>";
        // line 95
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "groups", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            echo "<li>";
            echo twig_escape_filter($this->env, $context["group"], "html", null, true);
            echo "</li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</ul>
              </li>
          </ul>
      </div>
  </div>
  <div class=\"col-md-4\">
    <div class=\"box\">
      <header>
          <h3><span class=\"fui-user\"></span> ";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.meta.association"), "html", null, true);
        echo " </h3>
      </header>
      <ul class=\"list-group\">
          <li class=\"list-group-item\"><strong>";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.family.name"), "html", null, true);
        echo " :</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profile", array()), "familyName", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.first.name"), "html", null, true);
        echo " :</strong>  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profile", array()), "firstName", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.cin"), "html", null, true);
        echo " :</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profile", array()), "cin", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("status.meta.name"), "html", null, true);
        echo " : </strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.gender"), "html", null, true);
        echo " :</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profile", array()), "gender", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.birthday"), "html", null, true);
        echo " :</strong> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profile", array()), "birthday", array()), "Y-m-d"), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.post.code"), "html", null, true);
        echo " :</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profile", array()), "postCode", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.job"), "html", null, true);
        echo " :</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profile", array()), "job", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.diplome"), "html", null, true);
        echo " :</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profile", array()), "diplome", array()), "html", null, true);
        echo "</li>
          <li class=\"list-group-item\"><strong>";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.expertise"), "html", null, true);
        echo " :</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profile", array()), "expertise", array()), "html", null, true);
        echo "</li>
      </ul>
    </div>
  </div> 

   <div class=\"col-md-4\">
       <div class=\"box\">
           <header>
               <h3><span class=\"fui-book\"></span> ";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.meta.contact"), "html", null, true);
        echo "</h3>
           </header>
           <ul class=\"list-group\">
              <li class=\"list-group-item\"><strong>";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.tel"), "html", null, true);
        echo " :</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profile", array()), "tel", array()), "html", null, true);
        echo "</li>
              <li class=\"list-group-item\"><strong>";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.gsm"), "html", null, true);
        echo " :</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profile", array()), "gsm", array()), "html", null, true);
        echo "</li>
              <li class=\"list-group-item\"><strong>";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.address"), "html", null, true);
        echo " :</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profile", array()), "address", array()), "html", null, true);
        echo "</li>
              <li class=\"list-group-item\"><strong>";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.city"), "html", null, true);
        echo " :</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profile", array()), "city", array()), "html", null, true);
        echo "</li>
              <li class=\"list-group-item\"><strong>";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.contry"), "html", null, true);
        echo " :</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profile", array()), "contry", array()), "html", null, true);
        echo "</li>
              <li class=\"list-group-item\"><strong>";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.description"), "html", null, true);
        echo " :</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profile", array()), "description", array()), "html", null, true);
        echo "</li>
              <li class=\"list-group-item\"><strong>";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.frequence"), "html", null, true);
        echo " :</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profile", array()), "frequence", array()), "html", null, true);
        echo "</li>
              <li class=\"list-group-item\"><strong>";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.montant"), "html", null, true);
        echo " :</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profile", array()), "montant", array()), "html", null, true);
        echo " DH</li>
           </ul>
       </div>
";
        // line 150
        echo "              
   </div> 
   <div class=\"col-md-8\">
      ";
        // line 153
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "avancements", array()))) {
            echo " 
      <div class=\"box\">
          <header>
              <h3><span class=\"glyphicon glyphicon-tag\"></span> ";
            // line 156
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("status.meta.logs"), "html", null, true);
            echo "</h3>
          </header>
          <div class=\"scrolldiv\">
          <table class=\"table table-hover table-bordered\">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>";
            // line 163
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("status.meta.name"), "html", null, true);
            echo "</th>
                      <th>";
            // line 164
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.city"), "html", null, true);
            echo "</th>
                      <th>";
            // line 165
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("cotisation.form.date.from"), "html", null, true);
            echo "</th>
                      <th>";
            // line 166
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("cotisation.form.date.to"), "html", null, true);
            echo "</th>
                  </tr>
              </thead>
              <tbody>
              ";
            // line 170
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "avancements", array()));
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
                // line 171
                echo "                <tr>
                  <td>";
                // line 172
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
                  <td>";
                // line 173
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "status", array()), "html", null, true);
                echo " </td>
                  <td>";
                // line 174
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "city", array()), "html", null, true);
                echo " </td>
                  <td>";
                // line 175
                if ($this->getAttribute($context["entity"], "dateFrom", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateFrom", array()), "d/m/Y"), "html", null, true);
                }
                echo "</td>
                  <td>";
                // line 176
                if ($this->getAttribute($context["entity"], "dateTo", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateTo", array()), "d/m/Y"), "html", null, true);
                }
                // line 177
                echo "                  ";
                if ($this->env->getExtension('security')->isGranted("ROLE_MANAGER")) {
                    echo " 
                  <a class=\"btn btn-link btn-xs pull-right\" href=\"";
                    // line 178
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("avancement_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.edit"), "html", null, true);
                    echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                  ";
                }
                // line 180
                echo "                  </td>
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
            // line 183
            echo "              </tbody>
          </table>
          </div>
      </div>
      ";
        }
        // line 188
        echo "      ";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cotisations", array()))) {
            // line 189
            echo "      <div class=\"box\">
          <header>
              <h3><span class=\"glyphicon glyphicon-tag\"></span> ";
            // line 191
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("cotisation.meta.logs"), "html", null, true);
            echo "</h3>
          </header>
          <div class=\"scrolldiv\">
              <table class=\"table table-hover table-bordered\">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>";
            // line 198
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("cotisation.form.price"), "html", null, true);
            echo "</th>
                      <th>";
            // line 199
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("cotisation.form.type"), "html", null, true);
            echo "</th>
                      <th>";
            // line 200
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("cotisation.form.date.from"), "html", null, true);
            echo "</th>
                      <th>";
            // line 201
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("cotisation.form.date.from"), "html", null, true);
            echo "</th>
                  </tr>
              </thead>
              <tbody>
              ";
            // line 205
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "cotisations", array()));
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
                // line 206
                echo "                <tr>
                  <td>";
                // line 207
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
                  <td>";
                // line 208
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "price", array()), "html", null, true);
                echo " DH</td>
                  <td>";
                // line 209
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "type", array()), "html", null, true);
                echo "</td>
                  <td>";
                // line 210
                if ($this->getAttribute($context["entity"], "datefrom", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datefrom", array()), "Y-m-d"), "html", null, true);
                }
                echo "</td>
                  <td>";
                // line 211
                if ($this->getAttribute($context["entity"], "dateto", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateto", array()), "Y-m-d"), "html", null, true);
                }
                // line 212
                echo "                  ";
                if ($this->env->getExtension('security')->isGranted("ROLE_MANAGER")) {
                    echo " 
                  <a class=\"btn btn-link btn-xs pull-right\" href=\"";
                    // line 213
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cotisation_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.edit"), "html", null, true);
                    echo "\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                  ";
                }
                // line 215
                echo "                  </td>
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
            // line 218
            echo "              </tbody>
          </table>
          </div>
      </div>
      ";
        }
        // line 223
        echo "      ";
        if ((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs"))) {
            // line 224
            echo "      <div class=\"box\">
          <header>
              <h3><span class=\"glyphicon glyphicon-tag\"></span> ";
            // line 226
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.meta.calls"), "html", null, true);
            echo "</h3>              
          </header>
          <div class=\"scrolldiv\">
          <table class=\"table table-hover table-bordered ajax\">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>";
            // line 233
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.meta.datecall"), "html", null, true);
            echo "</th>
                      <th>";
            // line 234
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.title.user"), "html", null, true);
            echo "</th>
                      <th>";
            // line 235
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("cotisation.form.type"), "html", null, true);
            echo "</th>
                      <th>";
            // line 236
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.meta.note"), "html", null, true);
            echo " 
                      ";
            // line 237
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 238
                echo "                      <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_clear_log", array("user" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-link btn-xs pull-right js-delete delete-all\" data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.empty.history"), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-trash\"></span></a>
                      ";
            }
            // line 240
            echo "                      </th>
                  </tr>
              </thead>
              <tbody>
              ";
            // line 244
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
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
                // line 245
                echo "                <tr>
                  <td>";
                // line 246
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
                  <td>";
                // line 247
                if ($this->getAttribute($context["entity"], "date", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "Y-m-d à H:i"), "html", null, true);
                }
                echo "</td>
                  <td><a href=\"";
                // line 248
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_show_user", array("id" => $this->getAttribute($context["entity"], "user", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
                echo "</a></td>
                  <td>";
                // line 249
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "type", array()), "html", null, true);
                echo "</td>
                  <td>";
                // line 250
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "message", array()), "html", null, true);
                echo " 
                  ";
                // line 251
                if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                    // line 252
                    echo "                  <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_clear_log", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-link btn-xs pull-right js-delete\" data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.delete"), "html", null, true);
                    echo "\"><span class=\"fui-cross\"></span></a>
                  ";
                }
                // line 254
                echo "                  </td>
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
            // line 257
            echo "              </tbody>
          </table>
          </div>
      </div>
      ";
        }
        // line 262
        echo "   </div>
</div>

";
    }

    // line 267
    public function block_javascripts($context, array $blocks = array())
    {
        // line 268
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-barcode.min.js"), "html", null, true);
        echo "\"></script>
<script> 
    (function(\$) {

      \$(\".js-barcode\").each(function(){
        \$(this).barcode(\$(this).data('id')+\"\", \"codabar\");   
      });

      \$('#js-delete').on('click', function(){
          confirmation('voullez-vous vraiment supprimer l\\'adherent '+\$(this).data('id')) && \$('#deleteForm').submit();
          return false;
      });

      \$('.ajax').on('click', 'a.js-delete', function(e){
        \$.ajax({ 
          type: \"POST\", 
          url: \$(this).attr('href')
        });
        if(\$(this).hasClass('delete-all'))
          \$(this).closest('.box').fadeOut();
        else \$(this).closest('tr').fadeOut();
        return false;
      });
          
    })(jQuery);
</script>
";
    }

    public function getTemplateName()
    {
        return "BenUserBundle:admin:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  816 => 269,  812 => 268,  809 => 267,  802 => 262,  795 => 257,  779 => 254,  771 => 252,  769 => 251,  765 => 250,  761 => 249,  755 => 248,  749 => 247,  745 => 246,  742 => 245,  725 => 244,  719 => 240,  711 => 238,  709 => 237,  705 => 236,  701 => 235,  697 => 234,  693 => 233,  683 => 226,  679 => 224,  676 => 223,  669 => 218,  653 => 215,  646 => 213,  641 => 212,  637 => 211,  631 => 210,  627 => 209,  623 => 208,  619 => 207,  616 => 206,  599 => 205,  592 => 201,  588 => 200,  584 => 199,  580 => 198,  570 => 191,  566 => 189,  563 => 188,  556 => 183,  540 => 180,  533 => 178,  528 => 177,  524 => 176,  518 => 175,  514 => 174,  510 => 173,  506 => 172,  503 => 171,  486 => 170,  479 => 166,  475 => 165,  471 => 164,  467 => 163,  457 => 156,  451 => 153,  446 => 150,  438 => 133,  432 => 132,  426 => 131,  420 => 130,  414 => 129,  408 => 128,  402 => 127,  396 => 126,  390 => 123,  377 => 115,  371 => 114,  365 => 113,  359 => 112,  353 => 111,  347 => 110,  341 => 109,  335 => 108,  329 => 107,  323 => 106,  317 => 103,  297 => 95,  293 => 94,  286 => 93,  278 => 91,  276 => 90,  270 => 89,  264 => 88,  256 => 87,  250 => 86,  244 => 83,  240 => 81,  231 => 75,  226 => 73,  218 => 68,  214 => 67,  208 => 64,  202 => 63,  197 => 61,  193 => 60,  189 => 59,  184 => 57,  178 => 53,  172 => 49,  163 => 47,  160 => 46,  157 => 45,  153 => 43,  147 => 42,  141 => 41,  135 => 40,  129 => 39,  123 => 38,  114 => 32,  107 => 28,  103 => 27,  99 => 26,  92 => 24,  89 => 23,  86 => 22,  78 => 17,  73 => 15,  69 => 14,  63 => 11,  59 => 10,  52 => 7,  49 => 6,  42 => 3,  39 => 2,  11 => 1,);
    }
}
