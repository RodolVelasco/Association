<?php

/* BenUserBundle:admin:search.html.twig */
class __TwigTemplate_910719111da5819878ee56b175d68a225d078796e1e2fceb38605ee44da836da extends Twig_Template
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
        echo "<!-- Modal advanced search -->
<div class=\"modal fade\" id=\"searchModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"searchModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close fui-cross\" data-dismiss=\"modal\" aria-hidden=\"true\"></button>
        <h4 class=\"modal-title\" id=\"searchModalLabel\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.advanced"), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
      <div class=\"row\">
          <div class=\"col-md-6\">
            <label for=\"\" class=\"control-label\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.cin"), "html", null, true);
        echo "</label>
            <div class=\"form-group \">
              <input type=\"text\" name=\"searchParam[cin]\" class=\"form-control\">
            </div>
          </div>
          <div class=\"col-md-6\">
            <label for=\"\" class=\"control-label\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.gender"), "html", null, true);
        echo "</label>
            <div class=\"\">
              <select name=\"searchParam[gender]\" class=\"primary select-block\">
                <option value=\"\"></option>
                <option value=\"homme\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.meta.man"), "html", null, true);
        echo "</option>
                <option value=\"femme\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.meta.woman"), "html", null, true);
        echo "</option>
              </select>
            </div>
          </div>
      </div>
      <div class=\"row\">
          <div class=\"col-md-6\"> 
              <label class=\"control-label\" for=\"date_from\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("cotisation.form.date.from"), "html", null, true);
        echo "</label>
              <div class=\"form-group \">
                    <input type=\"text\" class=\"form-control has-datepicker\" name=\"searchParam[date_from]\" id=\"date_from\" placeholder=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.birthday"), "html", null, true);
        echo "\">
              </div>
          </div>
          <div class=\"col-md-6\">
              <label class=\"control-label\" for=\"date_to\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("cotisation.form.date.to"), "html", null, true);
        echo "</label>
              <div class=\"form-group \">
                    <input type=\"text\" class=\"form-control has-datepicker\" name=\"searchParam[date_to]\" id=\"date_to\" placeholder=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.birthday"), "html", null, true);
        echo "\">
              </div>
          </div>
      </div>
      <div class=\"row\">
          <div class=\"col-md-6\">
            <label for=\"citySelect\" class=\"control-label\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.city"), "html", null, true);
        echo "</label>
            <div class=\"form-group \">
              <input id=\"citySelect\" type=\"text\" name=\"searchParam[city]\" class=\"form-control\">
            </div>
          </div>
          <div class=\"col-md-6\">
            <label for=\"citySelect\" class=\"control-label\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.barcode"), "html", null, true);
        echo "</label>
            <div class=\"form-group \">
              <input id=\"citySelect\" type=\"text\" name=\"searchParam[barcode]\" class=\"form-control\">
            </div>
          </div>
      </div>
      <div class=\"row\">
          <div class=\"col-md-6\">
            <label for=\"\" class=\"control-label\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("status.action.filter"), "html", null, true);
        echo "</label>
            <div class=\"\">
              <select name=\"searchParam[status]\" class=\"primary select-block\">
                <option value=\"0\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.meta.all"), "html", null, true);
        echo "</option>
                ";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 63
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "              </select>
            </div>
          </div>
          <div class=\"col-md-6\">
            <label for=\"\" class=\"control-label\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.action.filter"), "html", null, true);
        echo "</label>
            <div class=\"\">
              <select id=\"js-group\" name=\"searchParam[group]\" class=\"primary select-block\">
                <option value=\"0\">";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.meta.all"), "html", null, true);
        echo "</option>
                ";
        // line 73
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 74
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "              </select>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-6\">
            <label for=\"\" class=\"control-label\">";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("cotisation.action.filter"), "html", null, true);
        echo "</label>
            <div class=\"\">
              <select name=\"searchParam[cotisation]\" class=\"primary select-block\">
                <option value=\"0\">";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.meta.all"), "html", null, true);
        echo "</option>
                <option value=\"1\">Payé</option>
                <option value=\"2\">Non payé</option>
              </select>
            </div>
          </div>
          <div class=\"col-md-6\">
            <label for=\"\" class=\"control-label\">";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.meta.perpage"), "html", null, true);
        echo "</label>
            <div class=\"\">
              <select id=\"js-perpage\" name=\"searchParam[perPage]\" class=\"primary select-block\">
                <option value=\"10\" ";
        // line 95
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == 10)) {
            echo "selected";
        }
        echo ">10</option>
                <option value=\"20\" ";
        // line 96
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == 20)) {
            echo "selected";
        }
        echo ">20</option>
                <option value=\"50\" ";
        // line 97
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == 50)) {
            echo "selected";
        }
        echo ">50</option>
                <option value=\"100\" ";
        // line 98
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()) == 100)) {
            echo "selected";
        }
        echo ">100</option>
              </select>
            </div>
          </div>
        </div>
          <div class=\"clearfix\"></div>
      </div>
      <div class=\"modal-footer\">
      <div class=\"col-md-7\">
        <div class=\"input-group\">
          <input type=\"text\" name=\"searchParam[filterGroup]\" class=\"form-control\" placeholder=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.form.placeholder.filter"), "html", null, true);
        echo "\">
          <div class=\"input-group-btn\">
          <button id=\"js-filter-group\" class=\"btn btn-default\" type=\"button\"><span class=\"glyphicon glyphicon-plus\"></span></button>
          </div>
        </div>
      </div>

        <button id=\"js-search\" type=\"button\" class=\"btn btn-primary\">";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.search"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal group allocation -->
<div class=\"modal fade\" id=\"groupModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"groupModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close fui-cross\" data-dismiss=\"modal\" aria-hidden=\"true\"></button>
        <h4 class=\"modal-title\">";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.meta.name"), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
          <div class=\"form-group\">
            <label for=\"\" class=\"col-md-5 control-label\">";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.form.name"), "html", null, true);
        echo "</label>
            <div class=\"col-md-7\">
              <select name=\"group\" class=\"primary select-block\">
                ";
        // line 135
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 136
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "              </select>
            </div>
          </div>
          <div class=\"clearfix\"></div>
      </div>
      <div class=\"modal-footer\">
        <button id=\"js-group-set\" type=\"button\" class=\"btn btn-primary\">";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.valide"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
</div>

<!-- Profil Modal -->
<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close fui-cross\" data-dismiss=\"modal\" aria-hidden=\"true\"></button>
        <h4 class=\"modal-title\">";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.meta.name"), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
        ...
      </div>
      <div class=\"modal-footer text-center\">
        <button type=\"button\" class=\"btn btn-primary btn-embossed pull-left\" data-dir=\"prev\">";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.prev"), "html", null, true);
        echo "</button>
        <a href=\"#\" id=\"more\" class=\"btn btn-primary btn-embossed\">";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.more"), "html", null, true);
        echo "</a>
        <button type=\"button\" class=\"btn btn-primary btn-embossed pull-right\" data-dir=\"next\">";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.next"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
</div>

<!-- mail Modal -->
<div class=\"modal fade\" id=\"mailModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mailModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" style=\"width: 400px;\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close fui-cross\" data-dismiss=\"modal\" aria-hidden=\"true\"></button>
        <h4 class=\"modal-title\">";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.action.mail"), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
          <div class=\"form-group\">
            <div class=\"form-group\">
              <input type=\"text\" name=\"mail[subject]\" class=\"form-control obj\" placeholder=\"Objet\">
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"form-group\">
              <textarea id=\"body\" name=\"mail[body]\" rows=\"6\" class=\"form-control\" placeholder=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.meta.message"), "html", null, true);
        echo "\"></textarea>
            </div>
          </div>
          <button id=\"js-sendmail\" type=\"button\" class=\"btn btn-primary btn-block\">";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.send"), "html", null, true);
        echo "</button>
          <div class=\"clearfix\"></div>
      </div>
    </div>
  </div>
</div>

<!-- call Modal -->
<div class=\"modal fade\" id=\"callModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close fui-cross\" data-dismiss=\"modal\" aria-hidden=\"true\"></button>
        <h4 class=\"modal-title\">";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.meta.call"), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
      <div class=\"row\">
          <div class=\"col-xs-3\">
              <img class=\"img-responsive img-circle\" src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profile", array()), "image", array()), "getwebpath", array())), "html", null, true);
        echo "\"/>
          </div>
          <div class=\"col-xs-6 text-center\">
          <span class=\"throbber\">Loading…</span>
          <div id=\"timer\"></div></div>
          <div class=\"col-xs-3\">
              <img class=\"img-responsive\" src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/fixe.png"), "html", null, true);
        echo "\"/>
              <small class=\"number\"></small>
          </div>
          <div class=\"col-md-12 text-center\"><a href=\"#\" id=\"hangup\" data-toggle=\"tooltip\" title=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.hangup"), "html", null, true);
        echo "\" class=\"btn btn-danger btn-embossed\"><span class=\"glyphicon glyphicon-earphone\"></span></a></div>
      </div>
      <div class=\"feedback\">
          <label class=\"radio\">
            <span class=\"icons\"><span class=\"first-icon fui-radio-unchecked\"></span><span class=\"second-icon fui-radio-checked\"></span></span><input type=\"radio\" name=\"log[feedback]\" checked=\"checked\" value=\"réponse\" data-toggle=\"radio\">
            Réponse
          </label>
          <label class=\"radio\">
            <span class=\"icons\"><span class=\"first-icon fui-radio-unchecked\"></span><span class=\"second-icon fui-radio-checked\"></span></span><input type=\"radio\" name=\"log[feedback]\" value=\"occupé\" data-toggle=\"radio\">
            Occupé
          </label>
          <label class=\"radio\">
            <span class=\"icons\"><span class=\"first-icon fui-radio-unchecked\"></span><span class=\"second-icon fui-radio-checked\"></span></span><input type=\"radio\" name=\"log[feedback]\" value=\"pas de réponse\" data-toggle=\"radio\">
            Pas de réponse
          </label>
          <input type=\"hidden\" id=\"logtype\" name=\"log[type]\" value=\"appel\">
          <input type=\"hidden\" id=\"user\" name=\"log[entity_id]\" value=\"\">
          <input type=\"hidden\" name=\"log[user]\" value=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
        echo "\">
          <a href=\"#\" id=\"sendFeedback\" class=\"btn btn-primary btn-embossed pull-right\"><span class=\"glyphicon glyphicon-check\"></span> ";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.done"), "html", null, true);
        echo "</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- confirmation modal -->
<div class=\"modal fade\" id=\"confirmationModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"confirmationModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" style=\"width: 400px;\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close fui-cross\" data-dismiss=\"modal\" aria-hidden=\"true\"></button>
        <h4 class=\"modal-title\" id=\"confirmationModalLabel\">Raison du reject</h4>
      </div>
      <div class=\"modal-body\">
          <div class=\"form-group\">
            <div class=\"form-group\">
              <textarea rows=\"3\" name=\"cause\" placeholder=\"raison du reject...\" class=\"form-control\"></textarea>
            </div>
          </div>
          <button id=\"js-delete\" type=\"button\" class=\"btn btn-primary btn-block\">";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.send"), "html", null, true);
        echo "</button>
          <div class=\"clearfix\"></div>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "BenUserBundle:admin:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  445 => 255,  421 => 234,  417 => 233,  397 => 216,  391 => 213,  382 => 207,  374 => 202,  358 => 189,  352 => 186,  339 => 176,  324 => 164,  320 => 163,  316 => 162,  307 => 156,  292 => 144,  284 => 138,  273 => 136,  269 => 135,  263 => 132,  256 => 128,  240 => 115,  230 => 108,  215 => 98,  209 => 97,  203 => 96,  197 => 95,  191 => 92,  181 => 85,  175 => 82,  167 => 76,  156 => 74,  152 => 73,  148 => 72,  142 => 69,  136 => 65,  125 => 63,  121 => 62,  117 => 61,  111 => 58,  100 => 50,  91 => 44,  82 => 38,  77 => 36,  70 => 32,  65 => 30,  55 => 23,  51 => 22,  44 => 18,  35 => 12,  27 => 7,  19 => 1,);
    }
}
