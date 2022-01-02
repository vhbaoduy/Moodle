<?php

class __Mustache_0df6b916bd07cfaf986fdcd2b8041f6e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div
';
        $buffer .= $indent . '    data-region="paging-control-container"
';
        $buffer .= $indent . '    class="d-flex"
';
        $buffer .= $indent . '>
';
        // 'showitemsperpageselector' section
        $value = $context->find('showitemsperpageselector');
        $buffer .= $this->sectionAe2493dec939922decc58114faca3c46($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <nav
';
        $buffer .= $indent . '        id="';
        $blockFunction = $context->findInBlock('pagingbarid');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $buffer .= 'paging-bar-';
            $value = $this->resolveValue($context->find('uniqid'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
        }
        $buffer .= '"
';
        $buffer .= $indent . '        class="';
        // 'showitemsperpageselector' section
        $value = $context->find('showitemsperpageselector');
        $buffer .= $this->section10a9709addcd88957ce766b6b87747a0($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        data-region="paging-bar"
';
        $buffer .= $indent . '        data-ignore-control-while-loading="';
        $value = $this->resolveValue($context->find('ignorecontrolwhileloading'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '        data-hide-control-on-single-page="';
        $value = $this->resolveValue($context->find('hidecontrolonsinglepage'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        // 'activepagenumber' section
        $value = $context->find('activepagenumber');
        $buffer .= $this->sectionCac79c7fd4c9f95632c01648a3e54565($context, $indent, $value);
        // 'activepagenumber' inverted section
        $value = $context->find('activepagenumber');
        if (empty($value)) {
            
            $buffer .= $indent . '            data-active-page-number="1"
';
        }
        // 'itemsperpage' section
        $value = $context->find('itemsperpage');
        $buffer .= $this->section81f0d3ca76c096ba8ced636d1f5bf556($context, $indent, $value);
        // 'arialabels.paginationnav' section
        $value = $context->findDot('arialabels.paginationnav');
        $buffer .= $this->section17e619da2bbb9fdc8d5be15b0af14cb0($context, $indent, $value);
        // 'arialabels.paginationnav' inverted section
        $value = $context->findDot('arialabels.paginationnav');
        if (empty($value)) {
            
            $buffer .= $indent . '            aria-label="';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionB3b9fe4a96cf8bd9421e25e08601e058($context, $indent, $value);
            $buffer .= '"
';
        }
        // 'arialabels.paginationnavitemcomponents' section
        $value = $context->findDot('arialabels.paginationnavitemcomponents');
        $buffer .= $this->sectionC44345eeee8ef1501fd3a153f9c1eae3($context, $indent, $value);
        // 'arialabels.paginationnavitemcomponents' inverted section
        $value = $context->findDot('arialabels.paginationnavitemcomponents');
        if (empty($value)) {
            
            $buffer .= $indent . '            data-aria-label-components-pagination-item="pagedcontentnavigationitem, core"
';
        }
        // 'arialabels.paginationactivenavitemcomponents' section
        $value = $context->findDot('arialabels.paginationactivenavitemcomponents');
        $buffer .= $this->section4912200b597f2f81b4a4d1240f985363($context, $indent, $value);
        // 'arialabels.paginationactivenavitemcomponents' inverted section
        $value = $context->findDot('arialabels.paginationactivenavitemcomponents');
        if (empty($value)) {
            
            $buffer .= $indent . '            data-aria-label-components-pagination-active-item="pagedcontentnavigationactiveitem, core"
';
        }
        // 'barsize' section
        $value = $context->find('barsize');
        $buffer .= $this->section9a37719188bab6cc25a420c3e01a650e($context, $indent, $value);
        $buffer .= $indent . '    >
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <ul class="pagination mb-0">
';
        // 'previous' section
        $value = $context->find('previous');
        $buffer .= $this->section189bfef7d602240b8f8c5151a635faad($context, $indent, $value);
        // 'first' section
        $value = $context->find('first');
        $buffer .= $this->section7522547ad36f603ec71818803900ad6e($context, $indent, $value);
        // 'barsize' section
        $value = $context->find('barsize');
        $buffer .= $this->section450a4b7f973245388ab2f2f53fa79d72($context, $indent, $value);
        // 'pages' section
        $value = $context->find('pages');
        $buffer .= $this->sectionF2c2edfc6aa5fa328e341e897e758185($context, $indent, $value);
        // 'barsize' section
        $value = $context->find('barsize');
        $buffer .= $this->section5aadf645afa2b0a8f498b8dc784cb938($context, $indent, $value);
        // 'last' section
        $value = $context->find('last');
        $buffer .= $this->section2313be3fff20e5bd05be237b2841d199($context, $indent, $value);
        // 'next' section
        $value = $context->find('next');
        $buffer .= $this->section16f77a5dd7e35fa6cbdd61251f3a6e29($context, $indent, $value);
        $buffer .= '        </ul>
';
        $buffer .= $indent . '    </nav>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionCcd25cc1479e8bb63945e84015765508(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' show ';
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
                
                $buffer .= ' show ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1fc30d9b5c045b6fe36ea465474a6b37(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        aria-label="{{.}}"
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
                
                $buffer .= $indent . '                        aria-label="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE6922901afa7b60d3ce7403587f8d6c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{.}}';
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
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section796b182c855d7b48f08d0295b8450703(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' all, core ';
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
                
                $buffer .= ' all, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section769f2d943ce1a416c9b06bbb544f3649(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#value}}{{.}}{{/value}}{{^value}}{{#str}} all, core {{/str}}{{/value}}';
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
                
                // 'value' section
                $value = $context->find('value');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                // 'value' inverted section
                $value = $context->find('value');
                if (empty($value)) {
                    
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section796b182c855d7b48f08d0295b8450703($context, $indent, $value);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4372eb33fa5ee8f8402ede243f4fd53b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#active}}{{#value}}{{.}}{{/value}}{{^value}}{{#str}} all, core {{/str}}{{/value}}{{/active}}';
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
                
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->section769f2d943ce1a416c9b06bbb544f3649($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6113b9f16c85e7a79b6accdc9b9fddb7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pagedcontentpagingbaritemsperpage, core, {{#itemsperpage}}{{#active}}{{#value}}{{.}}{{/value}}{{^value}}{{#str}} all, core {{/str}}{{/value}}{{/active}}{{/itemsperpage}}';
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
                
                $buffer .= ' pagedcontentpagingbaritemsperpage, core, ';
                // 'itemsperpage' section
                $value = $context->find('itemsperpage');
                $buffer .= $this->section4372eb33fa5ee8f8402ede243f4fd53b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5d9b1f5b3bf648cd0157d4eb29955e77(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{#value}}{{.}}{{/value}}
                            {{^value}}{{#str}} all, core {{/str}}{{/value}}
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
                
                $buffer .= $indent . '                            ';
                // 'value' section
                $value = $context->find('value');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            ';
                // 'value' inverted section
                $value = $context->find('value');
                if (empty($value)) {
                    
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section796b182c855d7b48f08d0295b8450703($context, $indent, $value);
                }
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7d95db3278e97e1523f87a88fac594e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#active}}
                            {{#value}}{{.}}{{/value}}
                            {{^value}}{{#str}} all, core {{/str}}{{/value}}
                        {{/active}}
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
                
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->section5d9b1f5b3bf648cd0157d4eb29955e77($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section99ec45fa6cc29ee9b8f1b6c83c9f7f3d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        data-active-item-button-aria-label-components="{{.}}"
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
                
                $buffer .= $indent . '                        data-active-item-button-aria-label-components="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
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
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFc0c0b051caebb6243b5c2bd6d728967(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria-current="true"';
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
                
                $buffer .= 'aria-current="true"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a22793324a3beefffa9290e010b7876(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <a
                            class="dropdown-item {{#active}}active{{/active}}"
                            href="#"
                            data-limit="{{value}}"
                            role="menuitem"
                            {{#active}}aria-current="true"{{/active}}
                        >
                            {{#value}}{{.}}{{/value}}
                            {{^value}}{{#str}} all, core {{/str}}{{/value}}
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
                
                $buffer .= $indent . '                        <a
';
                $buffer .= $indent . '                            class="dropdown-item ';
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                            href="#"
';
                $buffer .= $indent . '                            data-limit="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                            role="menuitem"
';
                $buffer .= $indent . '                            ';
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->sectionFc0c0b051caebb6243b5c2bd6d728967($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        >
';
                $buffer .= $indent . '                            ';
                // 'value' section
                $value = $context->find('value');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            ';
                // 'value' inverted section
                $value = $context->find('value');
                if (empty($value)) {
                    
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section796b182c855d7b48f08d0295b8450703($context, $indent, $value);
                }
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAe2493dec939922decc58114faca3c46(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div
            id="paging-control-limit-container-{{uniqid}}"
            data-region="paging-control-limit-container"
            class="d-inline-flex align-items-center"
        >
            <span class="mr-1">{{#str}} show {{/str}}</span>
            <div class="btn-group">
                <button
                    type="button"
                    class="btn btn-outline-secondary dropdown-toggle"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                    data-action="limit-toggle"
                    {{#arialabels.itemsperpage}}
                        aria-label="{{.}}"
                    {{/arialabels.itemsperpage}}
                    {{^arialabels.itemsperpage}}
                        aria-label="{{#str}} pagedcontentpagingbaritemsperpage, core, {{#itemsperpage}}{{#active}}{{#value}}{{.}}{{/value}}{{^value}}{{#str}} all, core {{/str}}{{/value}}{{/active}}{{/itemsperpage}}{{/str}}"
                    {{/arialabels.itemsperpage}}
                >
                    {{#itemsperpage}}
                        {{#active}}
                            {{#value}}{{.}}{{/value}}
                            {{^value}}{{#str}} all, core {{/str}}{{/value}}
                        {{/active}}
                    {{/itemsperpage}}
                </button>
                <div
                    role="menu"
                    class="dropdown-menu"
                    data-show-active-item
                    data-skip-active-class="true"
                    {{#arialabels.itemsperpagecomponents}}
                        data-active-item-button-aria-label-components="{{.}}"
                    {{/arialabels.itemsperpagecomponents}}
                    {{^arialabels.itemsperpagecomponents}}
                        data-active-item-button-aria-label-components="pagedcontentpagingbaritemsperpage, core"
                    {{/arialabels.itemsperpagecomponents}}
                >
                    {{#itemsperpage}}
                        <a
                            class="dropdown-item {{#active}}active{{/active}}"
                            href="#"
                            data-limit="{{value}}"
                            role="menuitem"
                            {{#active}}aria-current="true"{{/active}}
                        >
                            {{#value}}{{.}}{{/value}}
                            {{^value}}{{#str}} all, core {{/str}}{{/value}}
                        </a>
                    {{/itemsperpage}}
                </div>
            </div>
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
                
                $buffer .= $indent . '        <div
';
                $buffer .= $indent . '            id="paging-control-limit-container-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '            data-region="paging-control-limit-container"
';
                $buffer .= $indent . '            class="d-inline-flex align-items-center"
';
                $buffer .= $indent . '        >
';
                $buffer .= $indent . '            <span class="mr-1">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionCcd25cc1479e8bb63945e84015765508($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '            <div class="btn-group">
';
                $buffer .= $indent . '                <button
';
                $buffer .= $indent . '                    type="button"
';
                $buffer .= $indent . '                    class="btn btn-outline-secondary dropdown-toggle"
';
                $buffer .= $indent . '                    data-toggle="dropdown"
';
                $buffer .= $indent . '                    aria-haspopup="true"
';
                $buffer .= $indent . '                    aria-expanded="false"
';
                $buffer .= $indent . '                    data-action="limit-toggle"
';
                // 'arialabels.itemsperpage' section
                $value = $context->findDot('arialabels.itemsperpage');
                $buffer .= $this->section1fc30d9b5c045b6fe36ea465474a6b37($context, $indent, $value);
                // 'arialabels.itemsperpage' inverted section
                $value = $context->findDot('arialabels.itemsperpage');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        aria-label="';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section6113b9f16c85e7a79b6accdc9b9fddb7($context, $indent, $value);
                    $buffer .= '"
';
                }
                $buffer .= $indent . '                >
';
                // 'itemsperpage' section
                $value = $context->find('itemsperpage');
                $buffer .= $this->section7d95db3278e97e1523f87a88fac594e8($context, $indent, $value);
                $buffer .= $indent . '                </button>
';
                $buffer .= $indent . '                <div
';
                $buffer .= $indent . '                    role="menu"
';
                $buffer .= $indent . '                    class="dropdown-menu"
';
                $buffer .= $indent . '                    data-show-active-item
';
                $buffer .= $indent . '                    data-skip-active-class="true"
';
                // 'arialabels.itemsperpagecomponents' section
                $value = $context->findDot('arialabels.itemsperpagecomponents');
                $buffer .= $this->section99ec45fa6cc29ee9b8f1b6c83c9f7f3d($context, $indent, $value);
                // 'arialabels.itemsperpagecomponents' inverted section
                $value = $context->findDot('arialabels.itemsperpagecomponents');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        data-active-item-button-aria-label-components="pagedcontentpagingbaritemsperpage, core"
';
                }
                $buffer .= $indent . '                >
';
                // 'itemsperpage' section
                $value = $context->find('itemsperpage');
                $buffer .= $this->section0a22793324a3beefffa9290e010b7876($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section10a9709addcd88957ce766b6b87747a0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'ml-auto';
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
                
                $buffer .= 'ml-auto';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCac79c7fd4c9f95632c01648a3e54565(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            data-active-page-number="{{.}}"
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
                
                $buffer .= $indent . '            data-active-page-number="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC1d537fd10a87073c69a35fb38cda5e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                data-items-per-page="{{value}}"
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
                
                $buffer .= $indent . '                data-items-per-page="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section81f0d3ca76c096ba8ced636d1f5bf556(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#active}}
                data-items-per-page="{{value}}"
            {{/active}}
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
                
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->sectionC1d537fd10a87073c69a35fb38cda5e7($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section17e619da2bbb9fdc8d5be15b0af14cb0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            aria-label="{{.}}"
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
                
                $buffer .= $indent . '            aria-label="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB3b9fe4a96cf8bd9421e25e08601e058(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pagedcontentnavigation, core ';
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
                
                $buffer .= ' pagedcontentnavigation, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC44345eeee8ef1501fd3a153f9c1eae3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            data-aria-label-components-pagination-item="{{.}}"
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
                
                $buffer .= $indent . '            data-aria-label-components-pagination-item="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4912200b597f2f81b4a4d1240f985363(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            data-aria-label-components-pagination-active-item="{{.}}"
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
                
                $buffer .= $indent . '            data-aria-label-components-pagination-active-item="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9a37719188bab6cc25a420c3e01a650e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            data-bar-size="{{.}}"
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
                
                $buffer .= $indent . '            data-bar-size="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFfade9c496d43a5145d6862c92c5313f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'previouspage';
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
                
                $buffer .= 'previouspage';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5e443b3f3fc6a26f93a9c6994805b986(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/previous, core ';
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
                
                $buffer .= ' i/previous, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDa462c4f96b5089cd26ce12c5added68(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/next, core ';
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
                
                $buffer .= ' i/next, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section189bfef7d602240b8f8c5151a635faad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{< core/paged_content_paging_bar_item }}
                    {{$linkattributes}}aria-label="{{#str}}previouspage{{/str}}"{{/linkattributes}}
                    {{$item-content}}
                        <span class="icon-no-margin dir-rtl-hide" aria-hidden="true">{{#pix}} i/previous, core {{/pix}}</span>
                        <span class="icon-no-margin dir-ltr-hide" aria-hidden="true">{{#pix}} i/next, core {{/pix}}</span>
                    {{/item-content}}
                    {{$attributes}}data-control="previous"{{/attributes}}
                {{/ core/paged_content_paging_bar_item }}
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
                
                $buffer .= $indent . '                ';
                if ($parent = $this->mustache->loadPartial('core/paged_content_paging_bar_item')) {
                    $context->pushBlockContext(array(
                        'linkattributes' => array($this, 'block170072556ee173000e300931fe2d431a'),
                        'item-content' => array($this, 'blockD9956dc48dd66f1fe7ef1d47e63d1ed6'),
                        'attributes' => array($this, 'block12120e4d0151c4806def3156af195371'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBa7f34f9d00bf2567ce32dadda211cb6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'firstpage';
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
                
                $buffer .= 'firstpage';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03d2c990698604a1f6c30efea4dea793(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'first';
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
                
                $buffer .= 'first';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7522547ad36f603ec71818803900ad6e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{< core/paged_content_paging_bar_item }}
                    {{$linkattributes}}aria-label="{{#str}}firstpage{{/str}}"{{/linkattributes}}
                    {{$item-content}}
                        {{#str}}first{{/str}}
                    {{/item-content}}
                    {{$attributes}}data-control="first"{{/attributes}}
                {{/ core/paged_content_paging_bar_item }}
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
                
                $buffer .= '                ';
                if ($parent = $this->mustache->loadPartial('core/paged_content_paging_bar_item')) {
                    $context->pushBlockContext(array(
                        'linkattributes' => array($this, 'block00a6fc0746f27080117dbc7fdba0db00'),
                        'item-content' => array($this, 'block6cb6468695b61ea87752a0daaad84d98'),
                        'attributes' => array($this, 'blockCbc4a7430da26319add789cf520478eb'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section450a4b7f973245388ab2f2f53fa79d72(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{< core/paged_content_paging_bar_item }}
                    {{$linkattributes}}aria-hidden="true"{{/linkattributes}}
                    {{$item-content}}
                        &hellip;
                    {{/item-content}}
                    {{$attributes}}data-dots="beginning"{{/attributes}}
                {{/ core/paged_content_paging_bar_item }}
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
                
                $buffer .= '                ';
                if ($parent = $this->mustache->loadPartial('core/paged_content_paging_bar_item')) {
                    $context->pushBlockContext(array(
                        'linkattributes' => array($this, 'block2e11d5705ef0636f4ee11e710a02c615'),
                        'item-content' => array($this, 'block602c3ba7d027db30d384967b3b484528'),
                        'attributes' => array($this, 'block84c9c68d0243c1a0fad6a2c4622f8301'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF2c2edfc6aa5fa328e341e897e758185(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{< core/paged_content_paging_bar_item }}
                    {{$attributes}}data-page="true"{{/attributes}}
                {{/ core/paged_content_paging_bar_item }}
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
                
                $buffer .= '                ';
                if ($parent = $this->mustache->loadPartial('core/paged_content_paging_bar_item')) {
                    $context->pushBlockContext(array(
                        'attributes' => array($this, 'block05f529f34933f2c86559b32975b81c54'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5aadf645afa2b0a8f498b8dc784cb938(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{< core/paged_content_paging_bar_item }}
                    {{$linkattributes}}aria-hidden="true"{{/linkattributes}}
                    {{$item-content}}
                        &hellip;
                    {{/item-content}}
                    {{$attributes}}data-dots="ending"{{/attributes}}
                {{/ core/paged_content_paging_bar_item }}
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
                
                $buffer .= '                ';
                if ($parent = $this->mustache->loadPartial('core/paged_content_paging_bar_item')) {
                    $context->pushBlockContext(array(
                        'linkattributes' => array($this, 'block2e11d5705ef0636f4ee11e710a02c615'),
                        'item-content' => array($this, 'block602c3ba7d027db30d384967b3b484528'),
                        'attributes' => array($this, 'block43fbef7eed3d1d713cc79dcab37b14c2'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE26f1921139fcd288aab8f946b2ddbe9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'lastpage';
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
                
                $buffer .= 'lastpage';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section484651457d3987d348fb573f16f6422e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'last';
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
                
                $buffer .= 'last';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2313be3fff20e5bd05be237b2841d199(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{< core/paged_content_paging_bar_item }}
                    {{$linkattributes}}aria-label="{{#str}}lastpage{{/str}}"{{/linkattributes}}
                    {{$item-content}}
                        {{#str}}last{{/str}}
                    {{/item-content}}
                    {{$attributes}}data-control="last"{{/attributes}}
                {{/ core/paged_content_paging_bar_item }}
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
                
                $buffer .= '                ';
                if ($parent = $this->mustache->loadPartial('core/paged_content_paging_bar_item')) {
                    $context->pushBlockContext(array(
                        'linkattributes' => array($this, 'blockCdbd1c044dd2ec45b5fcabedadd61261'),
                        'item-content' => array($this, 'blockA5d40964f4d58d7caaf03e0ae750f317'),
                        'attributes' => array($this, 'block76ecf06374cb515b4027dd1680730b5e'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section778db60ffc27f215bfe33103b727aa02(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nextpage';
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
                
                $buffer .= 'nextpage';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section16f77a5dd7e35fa6cbdd61251f3a6e29(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{< core/paged_content_paging_bar_item }}
                    {{$linkattributes}}aria-label="{{#str}}nextpage{{/str}}"{{/linkattributes}}
                    {{$item-content}}
                        <span class="icon-no-margin dir-rtl-hide" aria-hidden="true">{{#pix}} i/next, core {{/pix}}</span>
                        <span class="icon-no-margin dir-ltr-hide" aria-hidden="true">{{#pix}} i/previous, core {{/pix}}</span>
                    {{/item-content}}
                    {{$attributes}}data-control="next"{{/attributes}}
                {{/ core/paged_content_paging_bar_item }}
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
                
                $buffer .= '                ';
                if ($parent = $this->mustache->loadPartial('core/paged_content_paging_bar_item')) {
                    $context->pushBlockContext(array(
                        'linkattributes' => array($this, 'block1598d3fe497a64ad3111c233b757c273'),
                        'item-content' => array($this, 'block496ac3ffeda085545b43b0438d753b1d'),
                        'attributes' => array($this, 'block6b9932538b9a38e61842fc27de1eab11'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block170072556ee173000e300931fe2d431a($context)
    {
        $indent = $buffer = '';
        $buffer .= 'aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionFfade9c496d43a5145d6862c92c5313f($context, $indent, $value);
        $buffer .= '"';
    
        return $buffer;
    }

    public function blockD9956dc48dd66f1fe7ef1d47e63d1ed6($context)
    {
        $indent = $buffer = '';
        $buffer .= '                        <span class="icon-no-margin dir-rtl-hide" aria-hidden="true">';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->section5e443b3f3fc6a26f93a9c6994805b986($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                        <span class="icon-no-margin dir-ltr-hide" aria-hidden="true">';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->sectionDa462c4f96b5089cd26ce12c5added68($context, $indent, $value);
        $buffer .= '</span>
';
    
        return $buffer;
    }

    public function block12120e4d0151c4806def3156af195371($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'data-control="previous"';
    
        return $buffer;
    }

    public function block00a6fc0746f27080117dbc7fdba0db00($context)
    {
        $indent = $buffer = '';
        $buffer .= 'aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionBa7f34f9d00bf2567ce32dadda211cb6($context, $indent, $value);
        $buffer .= '"';
    
        return $buffer;
    }

    public function block6cb6468695b61ea87752a0daaad84d98($context)
    {
        $indent = $buffer = '';
        $buffer .= '                        ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section03d2c990698604a1f6c30efea4dea793($context, $indent, $value);
        $buffer .= '
';
    
        return $buffer;
    }

    public function blockCbc4a7430da26319add789cf520478eb($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'data-control="first"';
    
        return $buffer;
    }

    public function block2e11d5705ef0636f4ee11e710a02c615($context)
    {
        $indent = $buffer = '';
        $buffer .= 'aria-hidden="true"';
    
        return $buffer;
    }

    public function block602c3ba7d027db30d384967b3b484528($context)
    {
        $indent = $buffer = '';
        $buffer .= '                        &hellip;
';
    
        return $buffer;
    }

    public function block84c9c68d0243c1a0fad6a2c4622f8301($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'data-dots="beginning"';
    
        return $buffer;
    }

    public function block05f529f34933f2c86559b32975b81c54($context)
    {
        $indent = $buffer = '';
        $buffer .= 'data-page="true"';
    
        return $buffer;
    }

    public function block43fbef7eed3d1d713cc79dcab37b14c2($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'data-dots="ending"';
    
        return $buffer;
    }

    public function blockCdbd1c044dd2ec45b5fcabedadd61261($context)
    {
        $indent = $buffer = '';
        $buffer .= 'aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionE26f1921139fcd288aab8f946b2ddbe9($context, $indent, $value);
        $buffer .= '"';
    
        return $buffer;
    }

    public function blockA5d40964f4d58d7caaf03e0ae750f317($context)
    {
        $indent = $buffer = '';
        $buffer .= '                        ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section484651457d3987d348fb573f16f6422e($context, $indent, $value);
        $buffer .= '
';
    
        return $buffer;
    }

    public function block76ecf06374cb515b4027dd1680730b5e($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'data-control="last"';
    
        return $buffer;
    }

    public function block1598d3fe497a64ad3111c233b757c273($context)
    {
        $indent = $buffer = '';
        $buffer .= 'aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section778db60ffc27f215bfe33103b727aa02($context, $indent, $value);
        $buffer .= '"';
    
        return $buffer;
    }

    public function block496ac3ffeda085545b43b0438d753b1d($context)
    {
        $indent = $buffer = '';
        $buffer .= '                        <span class="icon-no-margin dir-rtl-hide" aria-hidden="true">';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->sectionDa462c4f96b5089cd26ce12c5added68($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                        <span class="icon-no-margin dir-ltr-hide" aria-hidden="true">';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->section5e443b3f3fc6a26f93a9c6994805b986($context, $indent, $value);
        $buffer .= '</span>
';
    
        return $buffer;
    }

    public function block6b9932538b9a38e61842fc27de1eab11($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'data-control="next"';
    
        return $buffer;
    }
}
