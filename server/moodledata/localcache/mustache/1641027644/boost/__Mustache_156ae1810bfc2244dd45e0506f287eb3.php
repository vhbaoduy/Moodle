<?php

class __Mustache_156ae1810bfc2244dd45e0506f287eb3 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="simplesearchform ';
        $value = $this->resolveValue($context->find('extraclasses'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        // 'inform' inverted section
        $value = $context->find('inform');
        if (empty($value)) {
            
            $buffer .= $indent . '    <form autocomplete="off" action="';
            $value = $this->resolveValue($context->find('action'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '" method="get" accept-charset="utf-8" class="mform form-inline simplesearchform">
';
        }
        // 'hiddenfields' section
        $value = $context->find('hiddenfields');
        $buffer .= $this->sectionA7d79bc471934c42862a589259878ff9($context, $indent, $value);
        $buffer .= $indent . '    <div class="input-group">
';
        $buffer .= $indent . '        <label for="searchinput-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '            <span class="sr-only">';
        $value = $this->resolveValue($context->find('searchstring'), $context);
        $buffer .= $value;
        $buffer .= '</span>
';
        $buffer .= $indent . '        </label>
';
        $buffer .= $indent . '        <input type="text"
';
        $buffer .= $indent . '           id="searchinput-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '           class="form-control"
';
        $buffer .= $indent . '           placeholder="';
        $value = $this->resolveValue($context->find('searchstring'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '           aria-label="';
        $value = $this->resolveValue($context->find('searchstring'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '           name="';
        $value = $this->resolveValue($context->find('inputname'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '           data-region="input"
';
        $buffer .= $indent . '           autocomplete="off"
';
        $buffer .= $indent . '           value="';
        $value = $this->resolveValue($context->find('query'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '        <div class="input-group-append">
';
        $buffer .= $indent . '            <button type="submit" class="btn ';
        // 'btnclass' inverted section
        $value = $context->find('btnclass');
        if (empty($value)) {
            
            $buffer .= 'btn-submit';
        }
        $buffer .= ' ';
        $value = $this->resolveValue($context->find('btnclass'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' search-icon">
';
        $buffer .= $indent . '                ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->section31a49b2ab335cdb4725ddb42ed8de96c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                <span class="sr-only">';
        $value = $this->resolveValue($context->find('searchstring'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        // 'otherfields' section
        $value = $context->find('otherfields');
        $buffer .= $this->sectionA82d08cdc884e8dd8092a3af24969805($context, $indent, $value);
        // 'inform' inverted section
        $value = $context->find('inform');
        if (empty($value)) {
            
            $buffer .= $indent . '    </form>
';
        }
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function sectionA7d79bc471934c42862a589259878ff9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <input type="hidden" name="{{ name }}" value="{{ value }}">
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <input type="hidden" name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31a49b2ab335cdb4725ddb42ed8de96c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' a/search, core ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' a/search, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA82d08cdc884e8dd8092a3af24969805(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div  class="ml-2">{{{ otherfields }}}</div>
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div  class="ml-2">';
                $value = $this->resolveValue($context->find('otherfields'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
