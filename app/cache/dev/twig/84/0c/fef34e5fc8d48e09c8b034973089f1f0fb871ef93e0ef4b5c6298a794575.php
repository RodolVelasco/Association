<?php

/* BenAssociationBundle:config:index.html.twig */
class __TwigTemplate_840cfef34e5fc8d48e09c8b034973089f1f0fb871ef93e0ef4b5c6298a794575 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.title"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-colorpicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/froala_editor.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "
<a class=\"btn btn-inverse pull-right btn-sm\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("config_update_fields"), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.action.fields"), "html", null, true);
        echo " <span class=\"fui-arrow-right\"></span></a>      
<h2><span class=\"fui-gear\"></span> ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.title"), "html", null, true);
        echo " </h2>
<form class=\"form-horizontal\" action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("config_update"), "html", null, true);
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
        <div class=\"tabbable\">
            <ul class=\"nav nav-tabs\">
              <li class=\"active\"><a href=\"#tab1\"><span class=\"fui-list-bulleted\"></span> ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.meta.general"), "html", null, true);
        echo "</a></li>
              <li><a href=\"#tab2\"><span class=\"fui-twitter\"></span> ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.meta.social"), "html", null, true);
        echo "</a></li>
              <li><a href=\"#tab3\"><span class=\"fui-gear\"></span> ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.meta.setting"), "html", null, true);
        echo "</a></li>
              <li><a href=\"#tab4\"><span class=\"fui-credit-card\"></span> ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.meta.carte"), "html", null, true);
        echo "</a></li>
              <li><a href=\"#tab5\"><span class=\"fui-tag\"></span> ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.meta.letters"), "html", null, true);
        echo "</a></li>
            </ul> <!-- /tabs -->

            <div class=\"tab-content\">
              <div class=\"tab-pane active\" id=\"tab1\">
              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.form.logo"), "html", null, true);
        echo "</label>
                <div class=\"col-sm-4\">
                  <img class=\"myavatar col-md-4\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_logo", array())), "html", null, true);
        echo "\">
                </div>
              </div>              
              ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["imgform"]) ? $context["imgform"] : $this->getContext($context, "imgform")), "file", array()), 'row', array("label" => " "));
        echo "
              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.form.name"), "html", null, true);
        echo "</label>
                <div class=\"col-sm-4\">
                  <input type=\"text\" name=\"config[org_name]\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_name", array()), "html", null, true);
        echo "\" class=\"form-control\">
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.form.description"), "html", null, true);
        echo "</label>
                <div class=\"col-sm-6\">
                  <textarea rows=\"3\" name=\"config[org_description]\" placeholder=\"ajouter une description...\" class=\"form-control\">";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_description", array()), "html", null, true);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.address"), "html", null, true);
        echo "</label>
                <div class=\"col-sm-4\">
                  <input type=\"text\" name=\"config[org_address]\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_address", array()), "html", null, true);
        echo "\" class=\"form-control\">
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.post.code"), "html", null, true);
        echo "</label>
                <div class=\"col-sm-4\">
                  <input type=\"text\" name=\"config[org_cp]\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_cp", array()), "html", null, true);
        echo "\" class=\"form-control\">
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.city"), "html", null, true);
        echo "</label>
                <div class=\"col-sm-4\">
                  <input type=\"text\" name=\"config[org_city]\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_city", array()), "html", null, true);
        echo "\" class=\"form-control\">
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.contry"), "html", null, true);
        echo "</label>
                <div class=\"col-sm-4\">
                  <input type=\"text\" name=\"config[org_contry]\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_contry", array()), "html", null, true);
        echo "\" class=\"form-control\">
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.tel"), "html", null, true);
        echo " </label>
                <div class=\"col-sm-4\">
                  <input type=\"text\" name=\"config[org_tel]\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_tel", array()), "html", null, true);
        echo "\" class=\"form-control\">
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.gsm"), "html", null, true);
        echo " </label>
                <div class=\"col-sm-4\">
                  <input type=\"text\" name=\"config[org_gsm]\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_gsm", array()), "html", null, true);
        echo "\" class=\"form-control\">
                </div>
              </div>
            </div><!-- /tab1 -->
              <div class=\"tab-pane\" id=\"tab2\">
              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.email"), "html", null, true);
        echo "</label>
                <div class=\"col-sm-4\">
                  <input type=\"text\" name=\"config[org_email]\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_email", array()), "html", null, true);
        echo "\" class=\"form-control\">
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.website"), "html", null, true);
        echo " </label>
                <div class=\"col-sm-4\">
                  <input type=\"text\" name=\"config[org_website]\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_website", array()), "html", null, true);
        echo "\" class=\"form-control\">
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.googleplus"), "html", null, true);
        echo " </label>
                <div class=\"col-sm-4\">
                  <input type=\"text\" name=\"config[org_google]\" value=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_google", array()), "html", null, true);
        echo "\" class=\"form-control\">
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.facebook"), "html", null, true);
        echo " </label>
                <div class=\"col-sm-4\">
                  <input type=\"text\" name=\"config[org_facebook]\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_facebook", array()), "html", null, true);
        echo "\" class=\"form-control\">
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.twitter"), "html", null, true);
        echo " </label>
                <div class=\"col-sm-4\">
                  <input type=\"text\" name=\"config[org_twitter]\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_twitter", array()), "html", null, true);
        echo "\" class=\"form-control\">
                </div>
              </div>
              </div><!-- /tab2 -->
              <div class=\"tab-pane\" id=\"tab3\">
              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.diplome"), "html", null, true);
        echo " </label>
                <div class=\"col-sm-6\">
                  <textarea rows=\"5\" name=\"config[org_diplome]\" class=\"form-control tagsinput\">";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_diplome", array()), "html", null, true);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.expertise"), "html", null, true);
        echo " </label>
                <div class=\"col-sm-6\">
                  <textarea rows=\"5\" name=\"config[org_expertise]\" class=\"form-control tagsinput\">";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_expertise", array()), "html", null, true);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.form.map.lat"), "html", null, true);
        echo " </label>
                <div class=\"col-sm-4\">
                  <input type=\"text\" name=\"config[org_map_lat]\" value=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_map_lat", array()), "html", null, true);
        echo "\" class=\"form-control\">
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.form.map.long"), "html", null, true);
        echo " </label>
                <div class=\"col-sm-4\">
                  <input type=\"text\" name=\"config[org_map_lng]\" value=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_map_lng", array()), "html", null, true);
        echo "\" class=\"form-control\">
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.form.theme"), "html", null, true);
        echo " </label>
                <div class=\"col-sm-4\">
                    <select name=\"config[app_theme]\" class=\"primary select-block\">
                        <option ";
        // line 144
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "app_theme", array()) == "theme1")) {
            echo "selected=\"selected\"";
        }
        echo " value=\"theme1\">Bluewood</option>
                        <option ";
        // line 145
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "app_theme", array()) == "theme2")) {
            echo "selected=\"selected\"";
        }
        echo " value=\"theme2\">Dark</option>
                        <option ";
        // line 146
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "app_theme", array()) == "theme3")) {
            echo "selected=\"selected\"";
        }
        echo " value=\"theme3\">PURPLE</option>
                    </select>
                </div>
              </div>
";
        // line 160
        echo "              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.meta.perpage"), "html", null, true);
        echo "  </label>
                <div class=\"col-sm-4\">
                  <select name=\"config[rows_per_page]\" class=\"primary select-block\">
                        <option ";
        // line 164
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == "10")) {
            echo "selected=\"selected\"";
        }
        echo " value=\"10\">10</option>
                        <option ";
        // line 165
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == "20")) {
            echo "selected=\"selected\"";
        }
        echo " value=\"20\">20</option>
                        <option ";
        // line 166
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == "30")) {
            echo "selected=\"selected\"";
        }
        echo " value=\"30\">30</option>
                        <option ";
        // line 167
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == "50")) {
            echo "selected=\"selected\"";
        }
        echo " value=\"50\">50</option>
                    </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.form.allowlogin"), "html", null, true);
        echo "</label>
                <div class=\"col-sm-4\">
                  <input type=\"checkbox\" name=\"config[org_signup]\" ";
        // line 174
        if ($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_signup", array())) {
            echo "checked=\"checked\"";
        }
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_signup", array()), "html", null, true);
        echo "\" data-toggle=\"switch\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.form.allowprint"), "html", null, true);
        echo "</label>
                <div class=\"col-sm-4\">
                  <input type=\"checkbox\" name=\"config[print_permission]\" ";
        // line 180
        if ($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "print_permission", array())) {
            echo "checked='checked'";
        }
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "print_permission", array()), "html", null, true);
        echo "\" data-toggle=\"switch\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.form.allowaccess"), "html", null, true);
        echo "</label>
                <div class=\"col-sm-4\">
                  <input type=\"checkbox\" name=\"config[allowaccess]\" ";
        // line 186
        if ($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "allowaccess", array())) {
            echo "checked=\"checked\"";
        }
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "allowaccess", array()), "html", null, true);
        echo "\" data-toggle=\"switch\" />
                </div>
              </div>
              </div><!-- /tab3 -->
              <div class=\"tab-pane\" id=\"tab4\">
              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.form.carte.bg"), "html", null, true);
        echo "</label>
                <div class=\"col-sm-4\">
                <div class=\"input-group mycolorpicker\" data-color=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "badge_bgcolor", array()), "html", null, true);
        echo "\" data-color-format=\"rgb\" >
                  <span class=\"input-group-addon\"><i></i></span>
                  <input type=\"text\" name=\"config[badge_bgcolor]\" value=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "badge_bgcolor", array()), "html", null, true);
        echo "\" class=\"form-control\">
                </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.form.carte.fg"), "html", null, true);
        echo "</label>
                <div class=\"col-sm-4\">
                <div class=\"input-group mycolorpicker\" data-color=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "badge_color", array()), "html", null, true);
        echo "\" data-color-format=\"rgb\" >
                  <span class=\"input-group-addon\"><i></i></span>
                  <input type=\"text\" name=\"config[badge_color]\" value=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "badge_color", array()), "html", null, true);
        echo "\" class=\"form-control\">
                </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.form.headband.text"), "html", null, true);
        echo "</label>
                <div class=\"col-sm-4\">
                  <input type=\"text\" name=\"config[org_slogan]\" value=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_slogan", array()), "html", null, true);
        echo "\" class=\"form-control\">
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.form.headband.bg"), "html", null, true);
        echo "</label>
                <div class=\"col-sm-4\">
                <div class=\"input-group mycolorpicker\" data-color=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "badge_footer_bgcolor", array()), "html", null, true);
        echo "\" data-color-format=\"rgb\" >
                  <span class=\"input-group-addon\"><i></i></span>
                  <input type=\"text\" name=\"config[badge_footer_bgcolor]\" value=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "badge_footer_bgcolor", array()), "html", null, true);
        echo "\" class=\"form-control\">
                </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.form.headband.fg"), "html", null, true);
        echo "</label>
                <div class=\"col-sm-4\">
                <div class=\"input-group mycolorpicker\" data-color=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "badge_footer_color", array()), "html", null, true);
        echo "\" data-color-format=\"rgb\" >
                  <span class=\"input-group-addon\"><i></i></span>
                  <input type=\"text\" name=\"config[badge_footer_color]\" value=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "badge_footer_color", array()), "html", null, true);
        echo "\" class=\"form-control\">
                </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.form.css"), "html", null, true);
        echo "</label>
                <div class=\"col-sm-6\">
                  <textarea name=\"config[org_carte_css]\" class=\"form-control\">";
        // line 236
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_carte_css", array()), "html", null, true);
        echo "</textarea>
                </div>
              </div>
              </div><!-- /tab4 -->

              <div class=\"tab-pane\" id=\"tab5\">
              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.form.letter.header"), "html", null, true);
        echo "</label>
                <div class=\"col-sm-6\">
                  <textarea name=\"config[letter_header]\" class=\"form-control veditor\">";
        // line 245
        echo $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "letter_header", array());
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.form.letter.event"), "html", null, true);
        echo " </label>
                <div class=\"col-sm-6\">
                  <textarea name=\"config[letter_invitation]\" class=\"form-control veditor\">";
        // line 251
        echo $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "letter_invitation", array());
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.form.letter.cotisation"), "html", null, true);
        echo " </label>
                <div class=\"col-sm-6\">
                  <textarea name=\"config[letter_cotisation]\" class=\"form-control veditor\">";
        // line 257
        echo $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "letter_cotisation", array());
        echo "</textarea>
                </div>
              </div>
              </div><!-- /tab5 -->
            </div> <!-- /tab-content -->
          </div>
              <div class=\"form-group\">
                <div class=\"col-sm-offset-4 col-sm-4\">
                  <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary btn-embossed\"><span class=\"fui-check-inverted\"></span> ";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.edit"), "html", null, true);
        echo "</button>
                </div>
              </div>
</form>
   
";
    }

    // line 271
    public function block_javascripts($context, array $blocks = array())
    {
        // line 272
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.tagsinput.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/froala_editor.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-colorpicker.min.js"), "html", null, true);
        echo "\"></script>
<script> 
    (function(\$) {
      \$(\".tagsinput\").tagsInput();
      \$('.veditor').editable({inlineMode: false});
      \$('.fr-dropdown').find('.fa-magic').parent().hide();
      \$('.mycolorpicker').colorpicker();

    })(jQuery);
</script>
";
    }

    public function getTemplateName()
    {
        return "BenAssociationBundle:config:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  622 => 276,  618 => 275,  614 => 274,  609 => 272,  606 => 271,  596 => 265,  585 => 257,  580 => 255,  573 => 251,  568 => 249,  561 => 245,  556 => 243,  546 => 236,  541 => 234,  533 => 229,  528 => 227,  523 => 225,  515 => 220,  510 => 218,  505 => 216,  498 => 212,  493 => 210,  485 => 205,  480 => 203,  475 => 201,  467 => 196,  462 => 194,  457 => 192,  444 => 186,  439 => 184,  428 => 180,  423 => 178,  412 => 174,  407 => 172,  397 => 167,  391 => 166,  385 => 165,  379 => 164,  373 => 161,  370 => 160,  361 => 146,  355 => 145,  349 => 144,  343 => 141,  336 => 137,  331 => 135,  324 => 131,  319 => 129,  312 => 125,  307 => 123,  300 => 119,  295 => 117,  286 => 111,  281 => 109,  274 => 105,  269 => 103,  262 => 99,  257 => 97,  250 => 93,  245 => 91,  238 => 87,  233 => 85,  224 => 79,  219 => 77,  212 => 73,  207 => 71,  200 => 67,  195 => 65,  188 => 61,  183 => 59,  176 => 55,  171 => 53,  164 => 49,  159 => 47,  152 => 43,  147 => 41,  140 => 37,  135 => 35,  130 => 33,  124 => 30,  119 => 28,  110 => 22,  106 => 21,  102 => 20,  98 => 19,  94 => 18,  88 => 15,  84 => 14,  78 => 13,  75 => 12,  72 => 11,  66 => 9,  62 => 8,  58 => 7,  53 => 6,  50 => 5,  42 => 3,  39 => 2,  11 => 1,);
    }
}
