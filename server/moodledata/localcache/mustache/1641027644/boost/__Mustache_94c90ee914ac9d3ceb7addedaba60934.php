<?php

class __Mustache_94c90ee914ac9d3ceb7addedaba60934 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="dropdown';
        // 'secondary.items' inverted section
        $value = $context->findDot('secondary.items');
        if (empty($value)) {
            
            $buffer .= ' hidden';
        }
        $buffer .= '">
';
        $buffer .= $indent . '    <a href="#" tabindex="0" class="d-inline-block ';
        $value = $this->resolveValue($context->find('triggerextraclasses'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' dropdown-toggle icon-no-margin" id="action-menu-toggle-';
        $value = $this->resolveValue($context->find('instance'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" aria-label="';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" aria-controls="action-menu-';
        $value = $this->resolveValue($context->find('instance'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '-menu">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('actiontext'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('menutrigger'), $context);
        $buffer .= $value;
        $buffer .= '
';
        // 'icon' section
        $value = $context->find('icon');
        $buffer .= $this->section15e4211117119fe9bc0d928b214dbd1b($context, $indent, $value);
        $buffer .= $indent . '            ';
        // 'rawicon' section
        $value = $context->find('rawicon');
        $buffer .= $this->sectionFb8e8ddc9ca3702110812af7d06781d6($context, $indent, $value);
        $buffer .= '
';
        // 'menutrigger' section
        $value = $context->find('menutrigger');
        $buffer .= $this->section89ae097a4603ecfa470370d34daf2f10($context, $indent, $value);
        $buffer .= $indent . '    </a>
';
        // 'secondary' section
        $value = $context->find('secondary');
        $buffer .= $this->sectionD0736b762425e72c6eb481b69426fd12($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section405505afc7f0960b491968ffe7f7ec4d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{key}},{{component}},{{title}}
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
                
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ',';
                $value = $this->resolveValue($context->find('component'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ',';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section15e4211117119fe9bc0d928b214dbd1b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#pix}}
                    {{key}},{{component}},{{title}}
                {{/pix}}
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
                
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section405505afc7f0960b491968ffe7f7ec4d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb8e8ddc9ca3702110812af7d06781d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{.}}}';
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
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section89ae097a4603ecfa470370d34daf2f10(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <b class="caret"></b>
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
                
                $buffer .= $indent . '        <b class="caret"></b>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd20463c348991d5bbd2fb97358ea7c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{name}}="{{value}}"';
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
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section78028136b30ee159a393bc3446ba3d4c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{< core/action_menu_link}}
                        {{$actionmenulinkclasses}}dropdown-item {{classes}}{{/actionmenulinkclasses}}
                    {{/ core/action_menu_link}}
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
                
                $buffer .= $indent . '                    ';
                if ($parent = $this->mustache->loadPartial('core/action_menu_link')) {
                    $context->pushBlockContext(array(
                        'actionmenulinkclasses' => array($this, 'blockBfb54ce9e3cbe67e174c40a3e2275021'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3f72e9958bde892e0dc4988229d2aacc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="dropdown-divider" role="presentation"><span class="filler">&nbsp;</span></div>
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
                
                $buffer .= '                    <div class="dropdown-divider" role="presentation"><span class="filler">&nbsp;</span></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section513b8fe3acaf1587c94e53dafc2ae6e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#actionmenulink}}
                    {{< core/action_menu_link}}
                        {{$actionmenulinkclasses}}dropdown-item {{classes}}{{/actionmenulinkclasses}}
                    {{/ core/action_menu_link}}
                {{/actionmenulink}}
                {{#actionmenufiller}}
                    <div class="dropdown-divider" role="presentation"><span class="filler">&nbsp;</span></div>
                {{/actionmenufiller}}
                {{^actionmenulink}}
                    {{^actionmenufiller}}
                        <div class="dropdown-item">{{> core/action_menu_item }}</div>
                    {{/actionmenufiller}}
                {{/actionmenulink}}
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
                
                // 'actionmenulink' section
                $value = $context->find('actionmenulink');
                $buffer .= $this->section78028136b30ee159a393bc3446ba3d4c($context, $indent, $value);
                // 'actionmenufiller' section
                $value = $context->find('actionmenufiller');
                $buffer .= $this->section3f72e9958bde892e0dc4988229d2aacc($context, $indent, $value);
                // 'actionmenulink' inverted section
                $value = $context->find('actionmenulink');
                if (empty($value)) {
                    
                    // 'actionmenufiller' inverted section
                    $value = $context->find('actionmenufiller');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '                        <div class="dropdown-item">';
                        if ($partial = $this->mustache->loadPartial('core/action_menu_item')) {
                            $buffer .= $partial->renderInternal($context);
                        }
                        $buffer .= '</div>
';
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD0736b762425e72c6eb481b69426fd12(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="dropdown-menu dropdown-menu-right {{classes}}"{{#attributes}} {{name}}="{{value}}"{{/attributes}}>
            {{#items}}
                {{#actionmenulink}}
                    {{< core/action_menu_link}}
                        {{$actionmenulinkclasses}}dropdown-item {{classes}}{{/actionmenulinkclasses}}
                    {{/ core/action_menu_link}}
                {{/actionmenulink}}
                {{#actionmenufiller}}
                    <div class="dropdown-divider" role="presentation"><span class="filler">&nbsp;</span></div>
                {{/actionmenufiller}}
                {{^actionmenulink}}
                    {{^actionmenufiller}}
                        <div class="dropdown-item">{{> core/action_menu_item }}</div>
                    {{/actionmenufiller}}
                {{/actionmenulink}}
            {{/items}}
        </div>
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
                
                $buffer .= $indent . '        <div class="dropdown-menu dropdown-menu-right ';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                // 'attributes' section
                $value = $context->find('attributes');
                $buffer .= $this->sectionAd20463c348991d5bbd2fb97358ea7c0($context, $indent, $value);
                $buffer .= '>
';
                // 'items' section
                $value = $context->find('items');
                $buffer .= $this->section513b8fe3acaf1587c94e53dafc2ae6e8($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockBfb54ce9e3cbe67e174c40a3e2275021($context)
    {
        $indent = $buffer = '';
        $buffer .= 'dropdown-item ';
        $value = $this->resolveValue($context->find('classes'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
    
        return $buffer;
    }
}
