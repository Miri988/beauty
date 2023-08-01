import styles from './Stars.module.scss';

export const Stars = (props) => {
  
  const {className} = props;

  return (
    <div className={`${className} ${styles.stars}`}>
        {Array(5).fill().map((_v, i) => <i className="icofont-star icon" key={i}></i>)}
        <span className="cost">(0)</span>
    </div>
  )
}
