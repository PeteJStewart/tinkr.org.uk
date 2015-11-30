<?php

/* core/themes/stable/templates/form/input.html.twig */
class __TwigTemplate_0eeee4f21a9461b1aa3e4d15fbf4ea0a77b042556aed88219b78127da12361ce extends Twig_Template
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
        $__internal_ecf7432ef8ad6d06a0e74c1c62bb44728fbf0ecfe0ec3ebac75c4d2192080a60 = $this->env->getExtension("native_profiler");
        $__internal_ecf7432ef8ad6d06a0e74c1c62bb44728fbf0ecfe0ec3ebac75c4d2192080a60->enter($__internal_ecf7432ef8ad6d06a0e74c1c62bb44728fbf0ecfe0ec3ebac75c4d2192080a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/form/input.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 13
        echo "<input";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo " />";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
";
        
        $__internal_ecf7432ef8ad6d06a0e74c1c62bb44728fbf0ecfe0ec3ebac75c4d2192080a60->leave($__internal_ecf7432ef8ad6d06a0e74c1c62bb44728fbf0ecfe0ec3ebac75c4d2192080a60_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/form/input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for an 'input' #type form element.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: A list of HTML attributes for the input element.*/
/*  * - children: Optional additional rendered elements.*/
/*  **/
/*  * @see template_preprocess_input()*/
/*  *//* */
/* #}*/
/* <input{{ attributes }} />{{ children }}*/
/* */
