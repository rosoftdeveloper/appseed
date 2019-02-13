<div class="container">
    <div class="section">
        <h3 class="title text-center">Themes list</h3>
        <br>
        <div class="row">
            <?php $__currentLoopData = config('themes.list'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4">
                    <div class="card card-plain card-blog">
                        <div class="card-image">
                            <a href="<?php echo e(url('/theme/'. $theme['url'])); ?>" target="_blank">
                                <img class="img rounded img-raised" src="../assets/img/bg5.jpg">
                            </a>
                        </div>

                        <div class="card-body">
                            <h6 class="category text-info">Enterprise</h6>
                            <h4 class="card-title">
                                <a href="<?php echo e(url('/theme/'. $theme['url'])); ?>" target="_blank"><?php echo e($theme['name']); ?></a>
                            </h4>
                            <p class="card-description">
                                Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.<a href="#pablo"> Read More </a>

                            </p><div class="author">
                                <img src="../assets/img/olivia.jpg" alt="..." class="avatar img-raised">
                                <span>Anna Spark</span>
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
                
                    
                        
                            
                        
                    

                    
                        
                        
                            
                        
                        
                            

                        
                            
                            
                        
                        
                    
                
            

            
                
                    
                        
                            
                        
                    
                    
                        
                            
                        
                        
                            
                        
                        
                            
                        
                            
                            
                        
                        
                    
                
            

            
                
                    
                        
                            
                        
                    

                    
                        
                            
                        
                        
                            
                        
                        
                            

                        
                            
                            
                        
                        
                    
                
            
        </div>

    </div>
</div>
