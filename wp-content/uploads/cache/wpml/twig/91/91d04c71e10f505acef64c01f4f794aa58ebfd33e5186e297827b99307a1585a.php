<?php

/* section-shortcode-action.twig */
class __TwigTemplate_e4a50fd8658526a9324081ecc8018dc3384a6fdb3f3689111a97348336b36dfd extends Twig_Template
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
        echo "<p>";
        echo $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "shortcode_actions", array()), "section_description", array());
        echo "</p>
<p>
    <input type=\"checkbox\" id=\"wpml-ls-show-in-shortcode-actions\" name=\"statics[shortcode_actions][show]\" value=\"1\"
                   class=\"js-wpml-ls-toggle-slot js-wpml-ls-trigger-save\" data-target=\".js-wpml-ls-shortcode-actions-toggle-target\"";
        // line 5
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "statics", array()), "shortcode_actions", array()), "show", array())) {
            echo "checked=\"checked\"";
        }
        echo "/>

    <label for=\"wpml-ls-show-in-shortcode-actions\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "shortcode_actions", array()), "show", array()), "html", null, true);
        echo "</label>
</p>

<div class=\"hidden\">";
        // line 11
        $context["slot_settings"] = array();
        // line 12
        $context["slot_settings"] = twig_array_merge(($context["slot_settings"] ?? null), array("shortcode_actions" => $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "statics", array()), "footer", array())));
        // line 14
        $this->loadTemplate("table-slots.twig", "section-shortcode-action.twig", 14)->display(array_merge($context, array("slot_type" => "statics", "slots_settings" =>         // line 17
($context["slot_settings"] ?? null), "slug" => "shortcode_actions")));
        // line 21
        echo "
</div>

<div class=\"js-wpml-ls-shortcode-actions-toggle-target alignleft";
        // line 24
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "statics", array()), "shortcode_actions", array()), "show", array()) != 1)) {
            echo " hidden";
        }
        echo "\">
    <button class=\"js-wpml-ls-open-dialog button-secondary\"
            data-target=\"#wpml-ls-slot-list-statics-shortcode_actions\"
            name=\"wpml-ls-customize\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "shortcode_actions", array()), "customize_button_label", array()), "html", null, true);
        echo "</button>
</div>";
    }

    public function getTemplateName()
    {
        return "section-shortcode-action.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 27,  51 => 24,  46 => 21,  44 => 17,  43 => 14,  41 => 12,  39 => 11,  33 => 7,  26 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "section-shortcode-action.twig", "/Users/spadilha/Sites/test/solar_wp/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/section-shortcode-action.twig");
    }
}
