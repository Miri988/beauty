import { Accordion } from "../Accordion/Accordion.jsx"
import { CheckRadio } from "../CheckRadio/CheckRadio.jsx"
import { FilterItem as FI } from "../../class/ShopFilter.js"

export const FilterItem = ({ data }) => {
    const { values, title, expanded, name, type } = data
    const types = {
        [FI.T_CHECKBOX]: 'checkbox',
        [FI.T_RADIO]: 'radio'
    }

    const onClick = (v) => {
        data.select(v)
    }
    
    return (
      <Accordion title={ title } expanded={ expanded } className="item">
        {
            values.map((v, i) => {
                return <div className="filter-value" key = {i}>
                    <CheckRadio checked={v.selected} name={ name } type={ types[type] }  labelName = {v.title} onClick ={() => onClick(v)}/>
                </div>
            })
        }
      </Accordion>
    )
}
