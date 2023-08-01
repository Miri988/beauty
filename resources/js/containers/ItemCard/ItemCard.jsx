import { Stars } from "../../components/Stars/Stars.jsx";
import { Button } from "../../components/Button/Button.jsx";
import imgariv1 from "../../assets/images/imgariv1.png";


export const ItemCard = (props) => {
    const {id} = props;

    const openCard = () => {
        window.location.href = `${window.location.href}/${id}`
      }
    
    
    return (
        <div className="item-card" onClick = {openCard}>
            <div className="square image">
                <div className="content">
                    <img src={imgariv1} alt = ""/>
                </div>
            </div>
            <div className="content">
                <div className="header">All-Around Safe Block Essence Sun SPF45+</div>
                <Stars/>
                <div className="description">All Around Safe Block Sun Milk SPF50+/PA+++</div>
                <span className="price">32$</span>
                <Button className="secondary fluid button">Add to Bag</Button>
            </div>
        </div>
    )
  }