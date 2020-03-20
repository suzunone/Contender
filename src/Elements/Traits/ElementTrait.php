<?php
/**
 * ElementTrait.php
 *
 * @category   Contender
 * @package    Contender\Elements\Traits
 * @subpackage Contender\Elements\Traits
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/15
 */

namespace Contender\Elements\Traits;

/**
 * Trait ElementTrait
 *
 * @category   Contender
 * @package    Contender\Elements\Traits
 * @subpackage Contender\Elements\Traits
 * @author     suzunone<suzunone.eleven@gmail.com>
 * @copyright  Project Contender
 * @license    MIT
 * @version    1.0
 * @link       https://github.com/suzunone/Contender
 * @see        https://github.com/suzunone/Contender
 * @since      2020/03/15
 * @property-read bool isElement
 * @property-read bool is_element
 * @property-read bool isAttr
 * @property-read bool is_attr
 * @property-read bool isText
 * @property-read bool is_text
 * @property-read bool isCharacterData
 * @property-read bool is_character_data
 * @property-read bool isEntityReference
 * @property-read bool is_entity_reference
 * @property-read bool isEntity
 * @property-read bool is_entity
 * @property-read bool isProcessingInstruction
 * @property-read bool is_processing_instruction
 * @property-read bool isComment
 * @property-read bool is_comment
 * @property-read bool isDocument
 * @property-read bool is_document
 * @property-read bool isDocumentType
 * @property-read bool is_document_type
 * @property-read bool isDocumentFragment
 * @property-read bool is_document_fragment
 * @property-read bool isNotation
 * @property-read bool is_notation
 * @property-read string innerText
 * @property-read string inner_text
 * @property-read string textContent
 * @property-read string text_content
 * @property string innerHTML
 * @property string inner_h_t_m_l
 * @property-read string outerHTML
 * @property-read string outer_h_t_m_l
 * @property string innerXML
 * @property string inner_x_m_l
 * @property-read string outerXML
 * @property-read string outer_x_m_l
 * @property-read string nodePath
 * @property-read string node_path
 * @property-read int lineNo
 * @property-read int line_no
 * @property-read \Contender\Elements\Collection children
 * @property-read \Contender\Elements\Collection childNodes
 * @property-read \Contender\Elements\Collection child_nodes
 * @property-read \Contender\Elements\Node firstChild
 * @property-read \Contender\Elements\Node first_child
 * @property-read \Contender\Elements\Node lastChild
 * @property-read \Contender\Elements\Node last_child
 * @property-read self firstElementChild
 * @property-read self first_element_child
 * @property-read self parentNode
 * @property-read self parent_node
 * @property-read self lastElementChild
 * @property-read self last_element_child
 * @property-read self previousElementSibling
 * @property-read self previous_element_sibling
 * @property-read self nextElementSibling
 * @property-read self next_element_sibling
 * @property-read self nextSibling
 * @property-read self next_sibling
 * @property-read int nodeType
 * @property-read int node_type
 * @property-read string nodeName
 * @property-read string node_name
 */
trait ElementTrait
{
    use GetterTrait;
    use SelectorTrait;
    use NodeTrait;
}
