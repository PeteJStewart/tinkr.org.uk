<?php

/* {# inline_template_start #}{{ raw_arguments.tid }} */
class __TwigTemplate_72d9ed82b8b0287cd2d75b2d47a7a6b256ab25016b87ab9838091bbb6a39c43b extends Twig_Template
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
        $__internal_f230037f675b36c3fd5e0683246ce052dc26586f0f5ba579237e44292bee4f40 = $this->env->getExtension("native_profiler");
        $__internal_f230037f675b36c3fd5e0683246ce052dc26586f0f5ba579237e44292bee4f40->enter($__internal_f230037f675b36c3fd5e0683246ce052dc26586f0f5ba579237e44292bee4f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}{{ raw_arguments.tid }}"));

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
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["raw_arguments"]) ? $context["raw_arguments"] : null), "tid", array()), "html", null, true));
        
        $__internal_f230037f675b36c3fd5e0683246ce052dc26586f0f5ba579237e44292bee4f40->leave($__internal_f230037f675b36c3fd5e0683246ce052dc26586f0f5ba579237e44292bee4f40_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{{ raw_arguments.tid }}";
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
/* {# inline_template_start #}{{ raw_arguments.tid }}*/
