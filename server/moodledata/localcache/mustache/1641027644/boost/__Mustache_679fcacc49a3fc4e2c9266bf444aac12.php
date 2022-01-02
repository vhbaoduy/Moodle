<?php

class __Mustache_679fcacc49a3fc4e2c9266bf444aac12 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="btn-group mr-1" role="group">
';
        $buffer .= $indent . '    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" data-action="';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '-content"
';
        $buffer .= $indent . '            aria-haspopup="true" aria-expanded="false" ';
        // 'contenttypes' inverted section
        $value = $context->find('contenttypes');
        if (empty($value)) {
            
            $buffer .= 'title="';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionE998c0f9363104d087843170139eef46($context, $indent, $value);
            $buffer .= '"
';
            $buffer .= $indent . '            disabled';
        }
        $buffer .= '>
';
        $buffer .= $indent . '        ';
        // 'name' section
        $value = $context->find('name');
        $buffer .= $this->section84d9e595ebdf661daaff6a03141c9a2b($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '    <div class="dropdown-menu dropdown-scrollable dropdown-menu-right">
';
        // 'contenttypes' section
        $value = $context->find('contenttypes');
        $buffer .= $this->section391fd1ed4924618309f611890c2bf9a2($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionE998c0f9363104d087843170139eef46(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nocontenttypes, core_contentbank';
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
                
                $buffer .= 'nocontenttypes, core_contentbank';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section84d9e595ebdf661daaff6a03141c9a2b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{name}} ';
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
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section275b078cc95635e8716ded05a9706a94(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <img alt="" class="icon" src="{{{ typeicon }}}">
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
                
                $buffer .= $indent . '                            <img alt="" class="icon" src="';
                $value = $this->resolveValue($context->find('typeicon'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB99149906c83356a14a4ab8af54979fc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' b/h5p_library, core ';
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
                
                $buffer .= ' b/h5p_library, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDada5a7da781f9a0a05f8cfe9d35d41e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <a class="dropdown-item icon-size-4" href="{{{ baseurl }}}&{{{ typeeditorparams }}}">
                        {{#typeicon}}
                            <img alt="" class="icon" src="{{{ typeicon }}}">
                        {{/typeicon}}
                        {{^typeicon}}
                            {{#pix}} b/h5p_library, core {{/pix}}
                        {{/typeicon}} {{ typename }}
                    </a>
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
                
                $buffer .= $indent . '                    <a class="dropdown-item icon-size-4" href="';
                $value = $this->resolveValue($context->find('baseurl'), $context);
                $buffer .= $value;
                $buffer .= '&';
                $value = $this->resolveValue($context->find('typeeditorparams'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                // 'typeicon' section
                $value = $context->find('typeicon');
                $buffer .= $this->section275b078cc95635e8716ded05a9706a94($context, $indent, $value);
                // 'typeicon' inverted section
                $value = $context->find('typeicon');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                            ';
                    // 'pix' section
                    $value = $context->find('pix');
                    $buffer .= $this->sectionB99149906c83356a14a4ab8af54979fc($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                        ';
                }
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('typename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section10b4e56962d38443c8a0139458c9cd5e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{^typeeditorparams}}
                    <h6 class="dropdown-header">{{ typename }}</h6>
                {{/typeeditorparams}}
                {{#typeeditorparams}}
                    <a class="dropdown-item icon-size-4" href="{{{ baseurl }}}&{{{ typeeditorparams }}}">
                        {{#typeicon}}
                            <img alt="" class="icon" src="{{{ typeicon }}}">
                        {{/typeicon}}
                        {{^typeicon}}
                            {{#pix}} b/h5p_library, core {{/pix}}
                        {{/typeicon}} {{ typename }}
                    </a>
                {{/typeeditorparams}}
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
                
                // 'typeeditorparams' inverted section
                $value = $context->find('typeeditorparams');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    <h6 class="dropdown-header">';
                    $value = $this->resolveValue($context->find('typename'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</h6>
';
                }
                // 'typeeditorparams' section
                $value = $context->find('typeeditorparams');
                $buffer .= $this->sectionDada5a7da781f9a0a05f8cfe9d35d41e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section391fd1ed4924618309f611890c2bf9a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#types}}
                {{^typeeditorparams}}
                    <h6 class="dropdown-header">{{ typename }}</h6>
                {{/typeeditorparams}}
                {{#typeeditorparams}}
                    <a class="dropdown-item icon-size-4" href="{{{ baseurl }}}&{{{ typeeditorparams }}}">
                        {{#typeicon}}
                            <img alt="" class="icon" src="{{{ typeicon }}}">
                        {{/typeicon}}
                        {{^typeicon}}
                            {{#pix}} b/h5p_library, core {{/pix}}
                        {{/typeicon}} {{ typename }}
                    </a>
                {{/typeeditorparams}}
            {{/types}}
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
                
                // 'types' section
                $value = $context->find('types');
                $buffer .= $this->section10b4e56962d38443c8a0139458c9cd5e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
