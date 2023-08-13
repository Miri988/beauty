import styles from './Stars.module.scss';

export const Stars = (props) => {
  
  const {className, rating} = props;

  return (
    <div className={`${className} ${styles.stars}`}>
        {Array(5).fill().map((_v, i) => <i className={`icofont-star icon ${i < rating ? styles.pink : ''}`} key={i}></i>)}
        <span className="cost">({rating})</span>
    </div>
  )
}
