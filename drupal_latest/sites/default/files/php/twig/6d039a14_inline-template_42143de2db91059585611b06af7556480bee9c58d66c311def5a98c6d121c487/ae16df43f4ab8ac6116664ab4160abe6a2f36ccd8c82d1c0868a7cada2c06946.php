<?php

/* {# inline_template_start #}{{ arguments.tid }} */
class __TwigTemplate_94e33fb394624abfc76f319108f91797bc8157d5182c6e4c8223d82155305e61 extends Twig_Template
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
        $__internal_5cfd4fa40195afcd8ce9d0f6dd1182ff84207e75703e78e90281d99f8a2f38e6 = $this->env->getExtension("native_profiler");
        $__internal_5cfd4fa40195afcd8ce9d0f6dd1182ff84207e75703e78e90281d99f8a2f38e6->enter($__internal_5cfd4fa40195afcd8ce9d0f6dd1182ff84207e75703e78e90281d99f8a2f38e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}{{ arguments.tid }}"));

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

        // line 1
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["arguments"]) ? $context["arguments"] : null), "tid", array()), "html", null, true));
        
        $__internal_5cfd4fa40195afcd8ce9d0f6dd1182ff84207e75703e78e90281d99f8a2f38e6->leave($__internal_5cfd4fa40195afcd8ce9d0f6dd1182ff84207e75703e78e90281d99f8a2f38e6_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{{ arguments.tid }}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}{{ arguments.tid }}*/
