import { useParams } from 'react-router-dom';
import { Stars } from '../../components/Stars/Stars.jsx';
import styles from "./ProductCard.module.scss"
import { Button } from '../../components/Button/Button.jsx';
import { Accordion } from '../../components/Accordion/Accordion.jsx';
import { Slider } from '../../containers/Slider/Slider.jsx';
import { useState, useEffect } from 'react';
import { ItemCard } from '../../containers/ItemCard/ItemCard.jsx';
import { ReviewFeed } from '../../components/ReviewFeed/ReviewFeed.jsx';
import bloom_left from "../../assets/images/bloom_left.png";
import bloom_right from "../../assets/images/bloom_right.png";
import { Loader } from '../../components/Loader/Loader.jsx';
import { useSelector } from 'react-redux';


export const ProductCard = (props) => {

  const [activeImage, setActiveImage] = useState(0);
  const [loaded, setLoaded] = useState(false);
  const [card, setCard] = useState();
  const mainData = useSelector(s => s.mainData)
  
  const { productId } = useParams();

  useEffect(() => {
    try {
      const fetchData = async () => {
        const result = await fetch('http://127.0.0.1:8000/api/products/' + productId)
        setCard(await result.json())
        const resultView = fetch('http://127.0.0.1:8000/api/products/view_products');
        const resultLike = fetch('http://127.0.0.1:8000/api/products/may_like_products');
        const [ dataView, dataLike ] = await Promise.all([resultView, resultLike])
        mainData.viewproducts = await dataView.json();
        mainData.maylikeproducts = await dataLike.json();
        mainData.loaded = true;
        setLoaded(true)
      }
      fetchData()
    } catch (e) {
      console.log(e)
    }
  }, []);

  return (
    <div className={styles.main}>
      { !loaded && <Loader /> }
      { loaded &&
        <>
          <div className="product">
        <div className="preview">
          <Slider size={1} className="basic" initial={activeImage} onChange={(v) => setActiveImage(v)}>
            {
              card.images.map((v, i) => <img src={v} alt="img" key={i} />)
            }
          </Slider>
          <div className="images">
            {
              card.images.map((v, i) => {
                return <div className={`square image ${i === activeImage ? 'active' : ''}`} key={i} onClick={() => setActiveImage(i)}>
                  <div className="content">
                    <img src={v} alt="img" />
                  </div>
                </div>
              })
            }
          </div>
        </div>
        <div className="info">
          <div className={`header ${styles.header}`}>{ card.title }</div>
          <div className={styles.rate}>
            <Stars className = {styles.starts} rating = { card.rating } />
            <span className="text">3 reviews</span>
          </div>
          <div className={styles.price}>${ card.price }</div>
          <div className={styles.description}>{ card.description }</div>
          <div className={styles.size}>Size: { card.size }</div>
          <Button className={`button wide ${styles.btn}`}>Add To Card</Button>
          <Accordion className = "secondary" expanded title = "WHAT MAKES IT GOOD">{ card.specification }</Accordion>
          <Accordion className = "secondary" title = "INGREDIENTS">{ card.ingredients}</Accordion>
          <Accordion className = "secondary" title = "HOW TO USE">{ card.use }</Accordion>
        </div>
      </div>


      <div className={styles.review}>
        <div className="center aligned margin">
          <div className={`heavier upper header ${styles.header}`}>
            <img src = {bloom_left} alt = ""/>
            Read The Reviews
            <img src = {bloom_right} alt = ""/>
            <div className="link subheader">See All</div>
          </div>
          <Button className={`button wide secondary ${styles.btn}`}>Write A Review</Button>
        </div>
        <div className="feed">
            <ReviewFeed/>
            <ReviewFeed/>
            <ReviewFeed/>
        </div>
        <div className={styles.recently}>
          <div className="center aligned margin">
            <div className={`heavier upper header ${styles.header}`}>
              <img src = {bloom_left} alt = ""/>
              Recently Viewed Products
              <img src = {bloom_right} alt = ""/>
              <div className="link subheader">See All</div>
            </div>
          </div>
          <div className={styles.grid}>
            {mainData.viewproducts.map((v,i) => <ItemCard key = {i} {...v}/>)}
          </div>
        </div>
        <div className={styles.like}>
          <div className="center aligned margin">
            <div className={`heavier upper header ${styles.header}`}>
              <img src = {bloom_left} alt = ""/>
              You May Also Like
              <img src = {bloom_right} alt = ""/>
            <div className="link subheader">See All</div>
           </div>
           </div>
          <Slider size={4}>
            {mainData.maylikeproducts.map((v,i) => <ItemCard key = {i} {...v}/>)}
          </Slider>
        </div>
      </div>
        </>
      }
    </div>
   
  )
}
