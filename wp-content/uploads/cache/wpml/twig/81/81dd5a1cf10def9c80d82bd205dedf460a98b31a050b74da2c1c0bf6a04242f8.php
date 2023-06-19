<?php

/* slot-subform-statics-shortcode_actions.twig */
class __TwigTemplate_dc77f7046da07720df240ce64b3954b3286fe3b24c0e23c7a0b473f6be7c9600 extends Twig_Template
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
        $this->loadTemplate("preview.twig", "slot-subform-statics-shortcode_actions.twig", 1)->display(array_merge($context, array("preview" => $this->getAttribute($this->getAttribute(($context["previews"] ?? null), "statics", array()), "shortcode_actions", array()))));
        // line 2
        echo "
<div class=\"wpml-ls-subform-options\">";
        // line 5
        $this->loadTemplate("dropdown-templates.twig", "slot-subform-statics-shortcode_actions.twig", 5)->display(array_merge($context, array("id" => "in-shortcode-action", "name" => "statics[shortcode_actions][template]", "value" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 9
($context["settings"] ?? null), "statics", array()), "shortcode_actions", array()), "template", array()), "slot_type" => "shortcode_actions")));
        // line 14
        $this->loadTemplate("checkboxes-includes.twig", "slot-subform-statics-shortcode_actions.twig", 14)->display(array_merge($context, array("id" => "in-shortcode-actions", "name_base" => "statics[shortcode_actions]", "slot_settings" => $this->getAttribute($this->getAttribute(        // line 18
($context["settings"] ?? null), "statics", array()), "shortcode_actions", array()), "template_slug" => $this->getAttribute(        // line 19
($context["slot_settings"] ?? null), "template", array()))));
        // line 23
        $this->loadTemplate("panel-colors.twig", "slot-subform-statics-shortcode_actions.twig", 23)->display(array_merge($context, array("id" => "in-shortcode-actions", "name_base" => "statics[shortcode_actions]", "slot_settings" => $this->getAttribute($this->getAttribute(        // line 27
($context["settings"] ?? null), "statics", array()), "shortcode_actions", array()))));
        // line 30
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "slot-subform-statics-shortcode_actions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 30,  32 => 27,  31 => 23,  29 => 19,  28 => 18,  27 => 14,  25 => 9,  24 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "slot-subform-statics-shortcode_actions.twig", "/Users/spadilha/Sites/test/solar_wp/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/slot-subform-statics-shortcode_actions.twig");
    }
}
